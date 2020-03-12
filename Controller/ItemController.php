<?php

include './vendor/autoload.php';
include 'Controller.php';

use Unirest\Request;

class ItemController
{

    public function new()
    {
        include_once './db/Type.php';
        $type = new Type();
        $types = $type->findAll();
        Controller::View('additempage', compact('types'));
    }
    public function create()
    {
        $item_name = $_POST['item_name'];
        $type_id = $_POST['type_id'];
        include_once('./db/Item.php');
        $item = new Item();
        $result = $item->Create($item_name, $type_id);
        echo $result;
    }
}
