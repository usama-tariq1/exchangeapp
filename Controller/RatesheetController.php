<?php

// session_start();
include './vendor/autoload.php';
// include_once 'db/user.php';
include 'Controller.php';

class RatesheetController
{
    public function index()
    {
        Controller::View('ratesheet', '');
    }
}
