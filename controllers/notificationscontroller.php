<?php
class NotificationsController extends Controller
{
    /**
     * GET /admin/notifications
     */
    public static function index(){
        parent::routeProtect(5);
        $users = Users::findAll();
        $notifications = Notifications::findAll();
        parent::header();
        parent::navbar();
        Flight::render('admin/notifications/notifications.view.php', ['notifications' => $notifications, 'users' => $users]);
        Flight::render('footer.view.php');
    }
    public static function create(){
        $newNotification = new Notification;
        $newNotification->userid = $_POST['userid'];
        $newNotification->title = $_POST['title'];
        $newNotification->description = $_POST['description'];
        $newNotification->request = 0;
        $newNotification->completed = 0;
        $newNotification->validate();
        Notifications::save($newNotification);
    }
    public static function remove($id){
        Notifications::remove($id);
    }
}