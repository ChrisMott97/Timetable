<?php

class AccountinfoController extends Controller
{
    
    public function index(){
        parent::routeProtect();
        parent::navbar();
        Flight::render('accountinfo.view.php', ['user' => $this->user]);
        Flight::render('footer.view.php');
    }
}