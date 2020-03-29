<?php


class SearchController extends Controller
{
    public function feedsearch()
    {
        if (isset($_GET['u_name'])) {
            $u_name = $_GET['u_name'];
            include_once('./db/User.php');
            $user = new User();
            $userlist = $user->like($u_name);
            // echo json_encode($userlist);
            self::View('userlist', compact('userlist'));
        } else {
            $u_name = "";
        }
    }
}
