<?php
class TeacherController extends Controller
{
    public static function index(){
        parent::routeProtect(3);
        parent::header();
        parent::navbar();
        Flight::render('teacher/index.view.php', ['user' => self::$user]);
        Flight::render('footer.view.php');
    }
}