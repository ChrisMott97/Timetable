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
    public static function create($type){
        parent::routeProtect(5);
        switch($type){
            case 'users':
                $newUser = new User;
                $newUser->username = $_POST['username'];
                $newUser->firstname = $_POST['firstname'];
                $newUser->lastname = $_POST['lastname'];
                $newUser->password = $_POST['password'];
                $newUser->year = $_POST['year'];
                $newUser->permission = 1;
                Users::save($newUser);
                break;
            case 'subjects':

                break;
            case 'notifications':

                break;
        }
    }
    public static function remove($type){
        parent::routeProtect(5);
        switch($type){
            case 'users':

                break;
            case 'subjects':

                break;
            case 'notifications':

                break;
        }
    }
    public static function update($type){
        parent::routeProtect(5);
        switch($type){
            case 'users':

                break;
            case 'subjects':

                break;
            case 'notifications':

                break;
        }
    }

    public static function users($operation){
        parent::routeProtect(5);
        switch($operation){
            case 'create':
                
                break;
            case 'remove':
                $id = $_POST['id'];
                Users::remove($id);
                break;
            case 'update':
                $id = $_POST['id'];
                $existingUser = Users::find($id);
                $existingUser->username = $_POST['username'];
                $existingUser->firstname = $_POST['firstname'];
                $existingUser->lastname = $_POST['lastname'];
                $existingUser->password = $_POST['password'];
                $existingUser->year = $_POST['year'];
                $existingUser->permission = $_POST['permission'];
                Users::save($existingUser);
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
        Flight::redirect('/admin');
    }
    public static function notifications($operation){
        parent::routeProtect(5);
        switch($operation){
            case 'create':
                $newNote = new Notification;
                $newNote->userid = $_POST['userids'];
                $newNote->title = $_POST['title'];
                $newNote->description = $_POST['details'];
                $newNote->request = 0;
                Notifications::save($newNote);
                break;
            case 'remove':
                $id = $_POST['id'];
                Notifications::remove($id);
                break;
        }
        Flight::redirect('/admin');
    }
}