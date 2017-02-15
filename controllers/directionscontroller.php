<?php
class DirectionsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    /**
     * GET /directions
     */
    public static function index(){
        parent::routeProtect();
        //$buildings = Query::selectCol('buildings', 'name');
        $buildings = Buildings::findAll();
        foreach ($buildings as $building) {
            //$buildingsArray[$building->name] = Query::selectRows('destinations', 'building', $building->name);
            $buildingsArray[$building->name] = Destinations::findBy('building', $building->name);
        }
        parent::header();
        parent::navbar();
        Flight::render('directions.view.php', ['buildings' => $buildingsArray]);
        Flight::render('footer.view.php');
    }
    /**
     * POST /directions
     */
    public static function redirect(){
        //$from = htmlspecialchars($_POST['from']);
        //$to = htmlspecialchars($_POST['to']);
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
     * GET /directions/@from/@to
     */
    public static function calculatePHP($from, $to){
        parent::routeProtect();
        $buildings = Buildings::findAll();
        foreach ($buildings as $building) {
            //$buildingsArray[$building->name] = Query::selectRows('destinations', 'building', $building->name);
            $buildingsArray[$building->name] = Destinations::findBy('building', $building->name);
        };

        $fromNode = Destinations::findBy('room', $from)[0]->nodeid;
        $fromNodeId = Nodes::find($fromNode)->identifier;

        $toNode = Destinations::findBy('room', $to)[0]->nodeid;
        $toNodeId = Nodes::find($toNode)->identifier;

        $route = Nodes::route();
        $graph = new DGraph($route);

        $output = 0;
        $output2 = $graph->findShortest('ReceptionE', 'Arts');

        parent::header();
        parent::navbar();
        Flight::render('result.view.php',['output' => $output, 'output2' => $route, 'buildings' => $buildingsArray]);
        Flight::render('footer.view.php');
    }
    public static function calculate($from, $to){
        parent::routeProtect();
        $buildings = Buildings::findAll();
        foreach ($buildings as $building) {
            //$buildingsArray[$building->name] = Query::selectRows('destinations', 'building', $building->name);
            $buildingsArray[$building->name] = Destinations::findBy('building', $building->name);
        }

        $fromNode = Destinations::findBy('room', $from)[0]->nodeid;
        $fromNodeId = Nodes::find($fromNode)->identifier;

        $toNode = Destinations::findBy('room', $to)[0]->nodeid;
        $toNodeId = Nodes::find($toNode)->identifier;

        // descriptor array
        $desc = array(
            0 => array('pipe', 'r'), // 0 is STDIN for process
            1 => array('pipe', 'w'), // 1 is STDOUT for process
            2 => array('pipe', 'w') // 2 is STDERR for process
        );

        // command to invoke python
        $cmd = getcwd(). "\\vendor\python\default\python.exe ".getcwd()."\\public\python\dijkstra_final.py".PHP_EOL;

        // spawn the process
        $p = proc_open($cmd, $desc, $pipes);

        if(is_resource($p)){
            
            fwrite($pipes[0], "'$fromNodeId'\n");
            fwrite($pipes[0], "'$toNodeId'\n");
            // fwrite($pipes[0], "'ReceptionE'\n");
            // fwrite($pipes[0], "'Arts'\n");

            //print fgets($pipes[1]);

            $error = fgets($pipes[2]);
            $output = fgets($pipes[1]);
            $output2 = fgets($pipes[1]);

            fclose($pipes[1]);
            fclose($pipes[0]);
            fclose($pipes[2]);
            $returned = proc_close($p);
            //echo $returned;
        } else {
            $output = 'no resource available';
            $output2 = 'no resource available';
        }
        parent::header();
        parent::navbar();
        Flight::render('result.view.php',['output' => $output, 'output2' => $output2, 'buildings' => $buildingsArray]);
        Flight::render('footer.view.php');
    }
}