<?php
class AdminController extends Controller
{
    public function index(){
        parent::routeProtect();
        Flight::render('navbar.view.php');
        Flight::render('admin/admin.view.php');
    }
}