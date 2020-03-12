<?php

include './vendor/autoload.php';
include 'Controller.php';

use Unirest\Request;

class FirmController  extends Controller
{

    public function index()
    {

        self::View('addfirmpage', '');
    }
    public function create()
    {
        $firm_name = $_POST['firm_name'];

        include_once('./db/Firm.php');
        $firm = new Firm();
        $result = $firm->Create($firm_name);
        echo $result;
    }
}
