<?php
class DirectionsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public static function index(){
        parent::routeProtect();
        $buildings = self::$query->selectCol('buildings', 'name');
        foreach ($buildings as $building) {
            $buildingsArray[$building->name] = self::$query->selectRows('rooms', 'building', $building->name);
        }
        parent::header();
        parent::navbar();
        Flight::render('directions.view.php', ['buildings' => $buildingsArray]);
        Flight::render('footer.view.php');
    }
    public static function redirect(){
        //$from = htmlspecialchars($_POST['from']);
        //$to = htmlspecialchars($_POST['to']);
        $from = $_POST['from'];
        $to = $_POST['to'];
        $from = htmlspecialchars($from);
        $to = htmlspecialchars($to);
        if($from == $to){
            Flight::redirect('/directions');
        }
        Flight::redirect("/directions/$from/$to");
    }
    public static function calculate($from, $to){
        parent::routeProtect();
        // descriptor array
        $desc = array(
            0 => array('pipe', 'r'), // 0 is STDIN for process
            1 => array('pipe', 'w'), // 1 is STDOUT for process
            2 => array('pipe', 'w') // 2 is STDERR for process
        );

        // command to invoke python
        $cmd = "python hello.py";

        // spawn the process
        $p = proc_open($cmd, $desc, $pipes);

        if(is_resource($p)){
            fwrite($pipes[0], $from . "\n");
            fwrite($pipes[0], $to . "\n");

            print fgets($pipes[1]);

            fclose($pipes[1]);
            fclose($pipes[0]);
            fclose($pipes[2]);
            $returned = proc_close($p);
            //echo $returned;
        } else {
        echo 'no resource available';
        }
        parent::header();
        parent::navbar();
        Flight::render('test.view.php');
        Flight::render('footer.view.php');
    }
}