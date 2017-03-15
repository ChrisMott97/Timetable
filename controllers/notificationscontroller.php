<?php
class NotificationsController extends Controller
{

    /**
     * GET /notifications.
     *
     * Gathers all user data and notifications data then renders notification view for normal users.
     * 
     * @return View 
     */
    public static function index(){
        parent::routeProtect(1);
        $users = Users::findAll();
        $notifications = Notifications::findAll();
        parent::header();
        parent::navbar();
        Flight::render('notifications.view.php', ['notifications' => $notifications, 'users' => $users, 'user' => self::$user]);
        Flight::render('footer.view.php');
    }
    
    /**
     * GET /admin/notifications.
     *
     * Gathers all user data and notifications data then renders notification view for admin users only.
     * 
     * @return View 
     */
    public static function admin(){
        parent::routeProtect(5);
        $users = Users::findAll();
        $notifications = Notifications::findAll();
        parent::header();
        parent::navbar();
        Flight::render('admin/notifications.view.php', ['notifications' => $notifications, 'users' => $users]);
        Flight::render('footer.view.php');
    }

    /**
     * GET /teacher/notifications.
     *
     * Gathers all user data and notifications data then renders notification view for teacher users only.
     * 
     * @return View 
     */
    public static function teacher(){
        parent::routeProtect(3);
        $users = Users::findAll();
        $notifications = Notifications::findAll();
        parent::header();
        parent::navbar();
        Flight::render('teacher/notifications.view.php', ['notifications' => $notifications, 'users' => $users]);
        Flight::render('footer.view.php');
    }
    
    /**
     * POST /admin/notifications.
     *
     * Creates a Notification object, validates it, then saves it with the Notifications model factory.
     * 
     * @return Void 
     */
    public static function create(){
        $newNotification = new Notification;
        $newNotification->toid = $_POST['userid'];
        $newNotification->fromid = self::$user->id;
        $newNotification->title = $_POST['title'];
        $newNotification->description = $_POST['description'];
        $newNotification->request = 0;
        $newNotification->completed = 0;
        $newNotification->validate();
        Notifications::save($newNotification);
    }
    
    /**
     * DELETE /admin/notifications/@id.
     *
     * Takes form input for the id then removes the notification.
     * 
     * @param  Integer $id passed from form
     * @return Void     
     */
    public static function remove($id){
        Notifications::remove($id);
    }
}