<?php


// session_start();
include './vendor/autoload.php';
// include_once 'db/user.php';
include 'Controller.php';


class RateUpdateController
{
    public function new()
    {
        include_once('./db/City.php');
        $city = new City();
        $cities = $city->findAll();

        include_once('./db/Item.php');
        $item = new Item();
        $items = $item->find([]);
        Controller::View('addratepage', compact('cities', 'items'));
    }
    public function create()
    {

        $item_id = $_POST['item_id'];
        $u_id = $_SESSION['u_id'];
        $city_id = $_POST['city_id'];
        $uprate = $_POST['uprate'];
        $downrate = $_POST['downrate'];
        $date = date("F j, Y");


        include_once('./db/RateUpdate.php');
        $rateupdate = new RateUpdate();
        $response = $rateupdate->create($date, $u_id, $item_id, $city_id, $uprate, $downrate);
        // echo $response;

        if ($response > 0) {
            $contract_id = 0;
            $u_id = $_SESSION['u_id'];
            $post_type = 'rateupdate';
            $rateupdate_id = $response;
            $city_id = $city_id;
            include_once('./db/Post.php');
            $post = new Post();
            echo $post->create($contract_id, $u_id, $date, $post_type, $rateupdate_id, $city_id, $item_id);
        }
    }

    public function update()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            include_once('./db/City.php');
            $city = new City();
            $cities = $city->findAll();

            include_once('./db/Item.php');
            $item = new Item();
            $items = $item->find([]);

            include_once('./db/RateUpdate.php');
            $rateupdate = new RateUpdate();
            $post = $rateupdate->find(['rateupdates.rateupdate_id' => $id])[0];

            Controller::View('editrateupdatepage', compact('cities', 'items', 'post'));
        } elseif (isset($_POST['rateupdate_id'])) {
            $rateupdate_id = $_POST['rateupdate_id'];
            $item_id = $_POST['item_id'];
            $u_id = $_SESSION['u_id'];
            $city_id = $_POST['city_id'];
            $uprate = $_POST['uprate'];
            $downrate = $_POST['downrate'];
            $date = date("F j, Y");


            include_once('./db/RateUpdate.php');
            $rateupdate = new RateUpdate();
            $response = $rateupdate->update($rateupdate_id, $date, $u_id, $item_id, $city_id, $uprate, $downrate);
            // echo $response;

            if ($response > 0) {
                $contract_id = 0;
                $u_id = $_SESSION['u_id'];
                $post_type = 'rateupdate';
                // $rateupdate_id = $response;
                $city_id = $city_id;
                include_once('./db/Post.php');
                $post = new Post();
                echo $post->update($contract_id, $u_id, $date, $post_type, $rateupdate_id, $city_id, $item_id);
            }
        } else {
            echo "<div id='errmsg'>Denied!</div>";
        }
    }
}
