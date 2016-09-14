<?php
class AdminController extends Controller
{
    public function index(){
        parent::routeProtect(5);
        Flight::render('navbar.view.php');
        Flight::render('admin/admin.view.php');
    }
}