<?php


class TestController
{
    public function testnotify()
    {
        include_once './db/Notification.php';
        $response = Notifyusers('this is title ', 'this is content of notification');
        $return["allresponses"] = $response;
        $return = json_encode($return);

        $data = json_decode($response, true);
        print_r($data);
        $id = $data['id'];
        print_r($id);

        print("\n\nJSON received:\n");
        print($return);
        print("\n");
    }
}
