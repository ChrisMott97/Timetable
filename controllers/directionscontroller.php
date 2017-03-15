<?php
class DirectionsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * GET /directions.
     *
     * Retrieves all destinations and renders the destination page.
     * 
     * @return View
     */
    public static function index(){
        parent::routeProtect();
        $buildings = Buildings::findAll();
        foreach ($buildings as $building) {
            $buildingsArray[$building->name] = Destinations::findBy('building', $building->name);
        }
        parent::header();
        parent::navbar();
        Flight::render('directions.view.php', ['buildings' => $buildingsArray]);
        Flight::render('footer.view.php');
    }
    
    /**
     * POST /directions.
     *
     * Used to take to and from points from form data and turn it into readable GET request.
     * 
     * @return Void 
     */
    public static function redirect(){
        $from = $_POST['from'];
        $to = $_POST['to'];
        $from = htmlspecialchars($from); //prevents hacking
        $to = htmlspecialchars($to);
        if($from == $to){
            Flight::redirect('/directions');
        }
        Flight::redirect("/directions/$from/$to");
    }
    
    /**
     * GET /directions/@from/@to.
     * 
     * Takes URI parameters, gathers information from the database, and exchanges information with the algorithm in Python.
     * 
     * @param  String $from start destination
     * @param  String $to   end destination
     * @return View       
     */
    public static function calculate($from, $to){
        parent::routeProtect();
        $buildings = Buildings::findAll();
        foreach ($buildings as $building) {
            $buildingsArray[$building->name] = Destinations::findBy('building', $building->name);
        }

        $fromNode = Destinations::findBy('room', htmlspecialchars($from))[0]->nodeid;
        $fromNodeId = Nodes::find($fromNode)->identifier;

        $toNode = Destinations::findBy('room', htmlspecialchars($to))[0]->nodeid;
        $toNodeId = Nodes::find($toNode)->identifier;

        // descriptor array
        $desc = array(
            0 => array('pipe', 'r'), // 0 is STDIN for process
            1 => array('pipe', 'w'), // 1 is STDOUT for process
            2 => array('pipe', 'w') // 2 is STDERR for process
        );

        // command to invoke python
        // $cmd = "\"\"".dirname(getcwd()). "\\eds-binaries\python\default\python.exe\" \"".getcwd()."\\public\python\dijkstra_final.py\"\"".PHP_EOL;
        $cmd = "python \"".getcwd()."/public/python/dijkstra_final. py\"".PHP_EOL;

        // spawn the process
        $p = proc_open($cmd, $desc, $pipes);
        if(is_resource($p)){
            
            fwrite($pipes[0], "'$fromNodeId'\n");
            fwrite($pipes[0], "'$toNodeId'\n");

            $error = fgets($pipes[2]);
            $output = fgets($pipes[1]);
            $output2 = fgets($pipes[1]);

            fclose($pipes[1]);
            fclose($pipes[0]);
            fclose($pipes[2]);
            $returned = proc_close($p);
        } else {
            $output = 'no resource available';
            $output2 = 'no resource available';
        }
        // echo $error;
        // echo $output;
        parent::header();
        parent::navbar();
        Flight::render('result.view.php',['output' => $output, 'output2' => $output2, 'buildings' => $buildingsArray, 'from' => $from, 'to' => $to]);
        Flight::render('footer.view.php');
    }
}