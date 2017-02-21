<?php

class SearchController extends Controller
{
	
    /**
     * GET /search.
     *
     * Retrieves all Users and Lessons and allows them to be searched.
     * 
     * @return View
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