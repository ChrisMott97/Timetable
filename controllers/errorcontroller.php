<?php

class ErrorController extends Controller
{
    /**
     * Renders error page depending on given error.
     * 
     * @param  Integer $ecode must be 3 numbers long
     * @return View        
     */
    public static function index($ecode){
        parent::header();
        switch ($ecode){
            /**
             * GET /401
             */
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