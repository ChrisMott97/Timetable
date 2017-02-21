<?php
class UsersController extends Controller
{
    
    /**
     * GET /admin/users.
     *
     * Retrieves all users and renders them in the admin interface.
     *
     * @return View 
     */
    public static function index(){
        parent::routeProtect(5);
        $users = Users::findAll();
        parent::header();
        parent::navbar();
        Flight::render('admin/users/users.view.php', ['users' => $users]);
        Flight::render('footer.view.php');
    }

    /**
     * POST /admin/users.
     *
     * Creates a User object with form data, validates, then saves with Users factory model.
     * 
     * @return Void 
     */
    public static function create(){
        $newUser = new User;
        $newUser->username = $_POST['username'];
        $newUser->firstname = $_POST['firstname'];
        $newUser->lastname = $_POST['lastname'];
        $newUser->password = $_POST['password'];
        $newUser->year = $_POST['year'];
        $newUser->permission = 1;
        $newUser->validate();
        Users::save($newUser);
    }

    /**
     * DELETE /admin/users/@id.
     *
     * Uses Users factory model to remove a given user.
     * 
     * @param  Integer $id 
     * @return Void     
     */
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