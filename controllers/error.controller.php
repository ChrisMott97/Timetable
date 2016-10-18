<?php

class ErrorController extends Controller
{
    public function index($ecode){
        parent::header();
        switch ($ecode){
            case 401: //unauthorized access
                Flight::render('navbar/0.view.php');
                Flight::render('errors/401.view.php');
                Flight::render('footer.view.php');
                break;
            default:
                Flight::redirect('/');
                break;
        }
    }
}