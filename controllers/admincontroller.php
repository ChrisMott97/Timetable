<?php
class AdminController extends Controller
{
    /**
     * GET /admin
     */
    public static function index(){
        parent::routeProtect(5);
        $users = Users::findAll();
        $notifications = Notifications::findAll();
        parent::header();
        parent::navbar();
        Flight::render('admin/admin.view.php', ['users' => $users, 'notifications' => $notifications]);
        Flight::render('footer.view.php');
    }
    /**
     * POST /admin/@submit
     */
    public static function create($submit){
        parent::routeProtect(5);
        switch($submit){
            case 'adduser':
                $newUser = new User;
                $newUser->username = $_POST['username'];
                $newUser->firstname = $_POST['firstname'];
                $newUser->lastname = $_POST['lastname'];
                //$newUser->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $newUser->password = $_POST['password'];
                $newUser->year = $_POST['year'];
                $newUser->permission = 1;
                //$newUser->create();
                Users::save($newUser);
                Flight::redirect('/admin');
                break;
            case 'addteacher':
                $newTeacher = new User;
                $newTeacher->username = $_POST['username'];
                $newTeacher->firstname = $_POST['firstname'];
                $newTeacher->lastname = $_POST['lastname'];
                //$newTeacher->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $newTeacher->password = $_POST['password'];
                $newTeacher->year = 0;
                $newTeacher->permission = 3;
                //$newTeacher->create();
                Users::save($newTeacher);
                Flight::redirect('/admin');
                break;
            case 'createnotify':
                $newNote = new Notification;
                $newNote->userid = $_POST['userids'];
                $newNote->title = $_POST['title'];
                $newNote->description = $_POST['details'];
                $newNote->request = 0;
                //$newNote->create();
                Notifications::save($newNote);
                Flight::redirect('/admin');
                break;
        }
    }
}