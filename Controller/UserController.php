<?php
// session_start();
include './vendor/autoload.php';
// include_once 'db/user.php';
include 'Controller.php';

use Unirest\Request;

class UserController
{

    public function index()
    {
    }

    public function create()
    {
        $name = $_POST['name'];
        $cell = $_POST['cell'];
        $cityid = $_POST['cityid'];
        $password = $_POST['password'];
        if ($_POST['profile'] != 0) {
            $profile = $_POST['profile'];
        } else {
            $profile = "avatar-icon.png";
        }
        // var_dump($_POST);
        include_once './db/User.php';
        $user = new User();
        $user->createuser($name, $cell, $cityid, $password, $profile);
    }
    public function update()
    {
        $u_id = $_SESSION['u_id'];
        $name = $_POST['name'];
        $cell = $_POST['cell'];
        $cityid = $_POST['cityid'];
        $password = $_POST['password'];
        if ($_POST['profile'] == "") {
            $profile = $_POST['oldprofile'];
        } else {
            $profile = $_POST['profile'];
        }
        include_once './db/User.php';
        $user = new User();
        $r = $user->update($u_id, $name, $cell, $cityid, $password, $profile);

        $response = compact('r');
        ini_set('display_errors', 1);
        echo json_encode($response);
    }
    public function updateform()
    {
        include_once './db/User.php';
        $user = new User();
        $ud = $user->find(
            [
                'u_id' => $_SESSION['u_id']
            ]
        )[0];
        include_once './db/City.php';
        $city = new City();
        $cities = $city->findAll();
        Controller::View('editprofile', compact('ud', 'cities'));
    }

    public function uploadprofile()
    {
        $profile = $_FILES['profile-img']['name'];
        if ($_FILES['profile-img']['error'] > 0) {
            echo  "Error uploading file";
            $profile = "avatar-icon.png";
        } else {
            $tmpname = $_FILES['profile-img']['tmp_name'];
            move_uploaded_file($tmpname, "./assets/images/" . $profile);
            $profile = $profile;
            echo $profile;
        }
        // echo $profile;
        // var_dump($_FILES);
        // ini_set('display_errors', 1);
        // echo "working";
    }

    public function authorizeuser()
    {
        $cell = $_POST['cell'];
        $password = $_POST['password'];
        include_once './db/User.php';
        $user = new User();
        $response = $user->authorizeuser($cell, $password);
        $rjson = json_encode($response);

        $r = $response['r'];
        $ud = $response['userdata'];

        if ($r == 1) {
            $_SESSION['u_cell'] = $cell;
            $_SESSION['u_name'] = $ud['u_name'];
            $_SESSION['u_id'] = $ud['u_id'];
            $_SESSION['u_profile'] = $ud['u_profile'];
        }
        echo $r;
    }

    public function profile()
    {
        include_once './db/User.php';
        $user = new User();
        $ud = $user->find(
            [
                'u_id' => $_SESSION['u_id']
            ]
        )[0];

        include_once './db/Post.php';
        $post = new Post();
        $posts = $post->find([
            'posts.u_id' => $_SESSION['u_id'],
            "ORDER" => ["posts.post_id" => "DESC"]
        ]);

        // $jd = json_encode($ud);
        // echo $jd;
        Controller::View('profile', compact('ud', 'posts'));
    }


    function __destruct()
    {
    }
}
