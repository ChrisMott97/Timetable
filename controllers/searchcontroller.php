<?php

class SearchController extends Controller
{
	/**
	 * GET /search
	 */
    public static function index(){
        parent::routeProtect();
        $users = Users::findAll();
        $lessons = Lessons::findAll();
        parent::header();
        parent::navbar();
        Flight::render('search.view.php', ['users' => $users, 'lessons' => $lessons]);
        Flight::render('footer.view.php');
    }
}