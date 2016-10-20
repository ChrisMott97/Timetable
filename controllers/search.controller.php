<?php

class SearchController extends Controller
{
    public function index(){
        parent::routeProtect();
        $users = $this->query->selectTable('users');
        $lessons = $this->query->selectTable('lessons');
        parent::header();
        parent::navbar();
        Flight::render('search.view.php', ['users' => $users, 'lessons' => $lessons]);
        Flight::render('footer.view.php');
    }
}