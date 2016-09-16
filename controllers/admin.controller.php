<?php
class AdminController extends Controller
{
    public function index(){
        parent::routeProtect(5);
        Flight::render('navbar.view.php');
        Flight::render('admin/admin.view.php');
        Flight::render('admin/adduser.view.php');
        Flight::render('footer.view.php');
    }
    
    public function create($submit){
        parent::routeProtect(5);
        switch($submit){
            case 'adduser':
                $adduser = new User;
                $adduser->username = $_POST['username'];
                $adduser->firstname = $_POST['firstname'];
                $adduser->lastname = $_POST['lastname'];
                $adduser->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $adduser->year = $_POST['year'];
                $adduser->create($adduser);
                Flight::redirect('/admin');
        }
    }
}