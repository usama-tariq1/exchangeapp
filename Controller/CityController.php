<?php

include './vendor/autoload.php';
include 'Controller.php';

use Unirest\Request;

class CityController
{

    public function index()
    {

        Controller::View('addcitypage', '');
    }
    public function create()
    {
        $city_name = $_POST['city_name'];
        $city_state = $_POST['city_state'];
        include_once('./db/City.php');
        $city = new City();
        $result = $city->Create($city_name, $city_state);
        echo $result;
    }
}
