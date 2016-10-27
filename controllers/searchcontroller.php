<?php

class SearchController extends Controller
{
    public static function index(){
        parent::routeProtect();
        $users = self::$query->selectTable('users');
        $lessons = self::$query->selectTable('lessons');
        parent::header();
        parent::navbar();
        Flight::render('search.view.php', ['users' => $users, 'lessons' => $lessons]);
        Flight::render('footer.view.php');
    }
}