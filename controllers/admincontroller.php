<?php
class AdminController extends Controller
{
    public static function index(){
        parent::routeProtect(5);
        $users = self::$query->selectTable("users");
        $allNotifications = self::$query->selectTable("notifications");
        parent::header();
        parent::navbar();
        Flight::render('admin/admin.view.php', ['users' => $users, 'allNotifications' => $allNotifications]);
        Flight::render('footer.view.php');
    }
    
    public static function create($submit){
        parent::routeProtect(5);
        switch($submit){
            case 'adduser':
                $adduser = new User;
                $adduser->username = $_POST['username'];
                $adduser->firstname = $_POST['firstname'];
                $adduser->lastname = $_POST['lastname'];
                $adduser->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $adduser->year = $_POST['year'];
                $adduser->permission = 1;
                $adduser->create();
                Flight::redirect('/admin');
                break;
            case 'addteacher':
                $addteacher = new User;
                $addteacher->username = $_POST['username'];
                $addteacher->firstname = $_POST['firstname'];
                $addteacher->lastname = $_POST['lastname'];
                $addteacher->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $addteacher->year = 0;
                $addteacher->permission = 3;
                $addteacher->create();
                Flight::redirect('/admin');
                break;
            case 'createnotify':
                $notification = new Notification;
                $notification->userid = $_POST['userids'];
                $notification->title = $_POST['title'];
                $notification->description = $_POST['details'];
                $notification->request = 0;
                $notification->create();
                Flight::redirect('/admin');
                break;
        }
    }
}