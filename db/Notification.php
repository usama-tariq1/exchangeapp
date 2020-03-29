<?PHP
function Notifyusers($title, $msg)
{
    $content      = array(
        "en" => $msg
    );
    $headings      = array(
        "en" => $title
    );
    $hashes_array = array();
    array_push($hashes_array, array(
        "id" => "like-button",
        "text" => "Like",
        "icon" => "http://i.imgur.com/N8SN8ZS.png",
        "url" => "https://yoursite.com"
    ));
    array_push($hashes_array, array(
        "id" => "like-button-2",
        "text" => "Like2",
        "icon" => "http://i.imgur.com/N8SN8ZS.png",
        "url" => "https://yoursite.com"
    ));
    $fields = array(
        'app_id' => "ddf03022-548f-4db5-bcb5-ea4d79964f45",
        'included_segments' => array(
            'All'
        ),
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
        'headings' => $headings,
        'small_icon' => '/assets/icons/titlelogo.png'
    );

    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic MjBjNzU5ZTgtMzk1My00NjIyLTg3MmMtOGM5MTEwOTI1NTVk'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    // return $response;
}

// $response = Notifyusers();
// $return["allresponses"] = $response;
// $return = json_encode($return);

// $data = json_decode($response, true);
// print_r($data);
// $id = $data['id'];
// print_r($id);

// print("\n\nJSON received:\n");
// print($return);
// print("\n");
