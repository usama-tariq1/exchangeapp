<?php



include './vendor/autoload.php';
include 'Controller.php';

use Unirest\Request;


class ApiRateUpdateController
{
    public function currency()
    {

        $currencies = ['USD', 'EUR', 'GBP', 'AUD', 'INR', 'SAR', 'CNY', 'AED'];
        $type = 'currency';
        include_once('./db/ApiRate.php');
        $apirate = new ApiRate();
        $apirate->update($date, $city_id, $item_id, $uprate, $downrate, $identifier);
    }
}
