<?php


// session_start();
include './vendor/autoload.php';
include 'Controller.php';

use Unirest\Request;

class ContractController
{

    public function index()
    {
        include_once('./db/Contract.php');
        $contract = new Contract();
        $response = $contract->find(['contract_id' => '2'])[0];
        echo json_encode($response);
    }

    public function new()
    {
        include_once('./db/City.php');
        $city = new City();
        $cities = $city->findAll();

        include_once('./db/Item.php');
        $item = new Item();
        $items = $item->find([
            "type_name" => "commodity"
        ]);

        include_once('./db/Firm.php');
        $firm = new Firm();
        $firms = $firm->findAll();

        Controller::View('addcontractpage', compact('cities', 'items', 'firms'));
    }
    public function create()
    {

        $item_id = $_POST['item_id'];
        $u_id = $_SESSION['u_id'];
        $city_id = $_POST['city_id'];
        $country_name = $_POST['country_name'];
        $date = date("F j, Y");
        $firm1 = $_POST['firm1'];
        $firm2 = $_POST['firm2'];
        $unit = $_POST['unit'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];

        include_once('./db/Contract.php');
        $contract = new Contract();
        $response = $contract->create($item_id, $u_id, $city_id, $date, $country_name, $firm1, $firm2, $unit, $price, $qty);
        if ($response > 0) {
            // include_once('./db/Contract.php');
            // $contract = new Contract();
            // $contracts = $contract->find(['contract_id' => $response])[0];

            // variable for new post 

            $contract_id = $response;
            $u_id = $_SESSION['u_id'];
            $post_type = 'contract';
            $rateupdate_id = 0;
            $city_id = $city_id;
            include_once('./db/Post.php');
            $post = new Post();
            echo $post->create($contract_id, $u_id, $date, $post_type, $rateupdate_id, $city_id, $item_id);
        }
    }
}
