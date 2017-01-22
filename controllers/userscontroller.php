<?php
class UsersController extends Controller
{
    /**
     * GET /admin/users
     */
    public static function index(){
        parent::routeProtect(5);
        $users = Users::findAll();
        parent::header();
        parent::navbar();
        Flight::render('admin/users/users.view.php', ['users' => $users]);
        Flight::render('footer.view.php');
    }
    public static function create(){
        $newUser = new User;
        $newUser->username = $_POST['username'];
        $newUser->firstname = $_POST['firstname'];
        $newUser->lastname = $_POST['lastname'];
        $newUser->password = $_POST['password'];
        $newUser->year = $_POST['year'];
        $newUser->permission = 1;
        if($newUser->validate()){
            Users::save($newUser);
        }
    }
    public static function remove($id){
        Users::remove($id);
    }
    public static function update($id){
        $existingUser = Users::find($id);
        $existingUser->username = $_POST['username'];
        $existingUser->firstname = $_POST['firstname'];
        $existingUser->lastname = $_POST['lastname'];
        $existingUser->password = $_POST['password'];
        $existingUser->year = $_POST['year'];
        $existingUser->permission = $_POST['permission'];
        $existingUser->validate();
        Users::save($existingUser);
    }
}