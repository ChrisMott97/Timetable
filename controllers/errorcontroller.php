<?php

class ErrorController extends Controller
{
    public static function index($ecode){
        parent::header();
        switch ($ecode){
            case 401: //unauthorized access
                parent::header();
                parent::navbar();
                Flight::render('errors/401.view.php');
                Flight::render('footer.view.php');
                break;
            default:
                Flight::redirect('/');
                break;
        }
    }
}