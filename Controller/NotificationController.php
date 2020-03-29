<?php



class NotificationController
{


    public function notify($title, $msg)
    {
        include_once './db/Notification.php';
        Notifyusers($title, $msg);
    }
}
