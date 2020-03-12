<?php
// session_start();
include './vendor/autoload.php';
include 'Controller.php';

use Unirest\Request;

class Home  extends Controller
{

    public function index()
    {

        self::View('app', '');
    }
}
