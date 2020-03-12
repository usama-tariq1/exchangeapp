<?php


// session_start();
include './vendor/autoload.php';
// include_once 'db/user.php';
include 'Controller.php';

class Module extends Controller
{
    function dock()
    {
        include_once './db/User.php';
        $user = new User();
        $ud = $user->find(
            [
                'u_id' => $_SESSION['u_id']
            ]
        )[0];
        self::View('dock', compact('ud'));
    }
    function addpage()
    {
        self::View('addmenu', '');
    }
    function addcity()
    {
        self::View('addcitypage', '');
    }
    function addfirm()
    {
    }
}
