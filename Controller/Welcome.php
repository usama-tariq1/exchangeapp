<?php
// session_start();
include './vendor/autoload.php';
include 'Controller.php';

use Unirest\Request;

class Welcome extends Controller
{

    public function index()
    {

        self::View('welcome', '');
    }
    public function signup()
    {
        include_once './db/City.php';
        $city = new City();
        $cities = $city->findAll();
        self::View('signup', compact('cities'));
    }
    public function login()
    {
        // self::View('app', '');
        self::View('signin', '');
    }
    public function start()
    {
        if (isset($_SESSION['u_id'])) {
            include_once './db/User.php';
            $user = new User();
            $ud = $user->find(
                [
                    'u_id' => $_SESSION['u_id']
                ]
            )[0];

            $u_name = $ud['u_name'];
            $u_profile = $ud['u_profile'];
            $city_name = $ud['city_name'];
            $code = 200;

            self::View('start', compact('u_name', 'u_profile', 'city_name', 'code'));
        } else {
            $code = 0;
            self::View('welcome', '');
        }
    }
    public function signout()
    {
        unset($_SESSION['u_name']);
        unset($_SESSION['u_profile']);
        unset($_SESSION['u_id']);
        unset($_SESSION['u_cell']);
        $_SESSION['u_name']  = NULL;
        $_SESSION['u_profile'] = NULL;
        $_SESSION['u_id'] = NULL;
        $_SESSION['u_cell'] = NULL;

        session_destroy();

        self::View('welcome', '');
    }
}
