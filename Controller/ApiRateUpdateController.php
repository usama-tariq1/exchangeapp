<?php



include './vendor/autoload.php';
include 'Controller.php';

use Unirest\Request;


class ApiRateUpdateController
{
    public function index()
    {
    }
    public function currency()
    {

        $ids = ['USD', 'EUR', 'GBP', 'AUD', 'INR', 'SAR', 'CNY', 'AED'];
        $type = 'currency';
        include_once('./db/ApiRate.php');
        $apirate = new ApiRate();
        $sum = 0;
        $date = date("F j, Y");
        $city_id = 0;

        $ratedata = file_get_contents('https://prime.exchangerate-api.com/v5/f1f6fff5e19ea7cde6ccd24a/latest/PKR', false);

        // $ratedata = file_get_contents('http://exchange.local/api' ,  );

        $ratedata = json_decode($ratedata);
        if ($ratedata->result = 'success') {
            $rate = $ratedata->conversion_rates;
        }

        foreach ($ids as $id) {
            // $rateof = $rate[$id];
            $uprate = 1 /  $rate->$id;
            $downrate = $uprate - ($uprate * (1 / 100));
            $r = $apirate->update($date, $uprate, $downrate, $id);
            $sum = $sum + $r;
        }
        if ($sum > 0) {
            echo "<div id='msg' >Api Rates Updated !</div>";
            $title = 'Update In Process ';
            $msg = 'Currency Rate are Updated! Date:  ' . $date;
            include_once('./db/Notification.php');
            $notif = Notifyusers($title, $msg);
        } else {
            echo "<div id='errmsg' >Unable to Upate !</div>";
        }

        // echo $ratedata->result;
    }
}
