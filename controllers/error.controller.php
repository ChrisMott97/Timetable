<?php

class ErrorController extends Controller
{
    public function index($ecode){
        switch ($ecode){
            case 401: //unauthorized access
                Flight::render('errors/401.view.php');
            default:
                Flight::redirect('/');
        }
    }
}