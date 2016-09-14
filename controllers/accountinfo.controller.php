<?php

class AccountinfoController extends Controller
{
    
    public function index(){
        parent::routeProtect();
        Flight::render('navbar.view.php');
        Flight::render('accountinfo.view.php', ['user' => $this->user]);
        Flight::render('footer.view.php');
    }
}