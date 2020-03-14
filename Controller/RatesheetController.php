<?php

// session_start();
include './vendor/autoload.php';
// include_once 'db/user.php';
include 'Controller.php';

class RatesheetController
{
    public function index()
    {
        include_once './db/ApiRate.php';
        $apirate = new ApiRate();
        $apirates = $apirate->findAll();
        $type = 'all';
        Controller::View('ratesheet', compact('apirates', 'type'));
    }
    public function currency()
    {
        include_once './db/ApiRate.php';
        $apirate = new ApiRate();
        $apirates = $apirate->find(['type' => 'currency']);
        $type = 'currency';
        Controller::View('ratesheet', compact('apirates', 'type'));
    }
    public function commodity()
    {
        include_once './db/ApiRate.php';
        $apirate = new ApiRate();
        $apirates = $apirate->find(['type' => 'commodity']);
        $type = 'commodity';
        Controller::View('ratesheet', compact('apirates', 'type'));
    }
}
