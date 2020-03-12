<?php

// session_start();
include './vendor/autoload.php';
// include_once 'db/user.php';
include 'Controller.php';

class PostController extends Controller
{

    public function index()
    {
        include_once './db/Post.php';
        $post = new Post();
        $posts = $post->findAll();
        self::View('feed', compact('posts'));
    }

    public function types()
    {
        include_once './db/Type.php';
        $type = new Type();
        $types = $type->findAll();
        self::View('typepage', compact('types'));
    }
    public function post()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
        $p_id = $_GET['id'];
        include_once './db/Post.php';

        $post = new Post();
        $posts = $post->find(['posts.post_id' => $p_id])[0];
        if ($posts['u_id'] = $_SESSION['u_id']) {
            $r = $post->delete($p_id);
            if ($r > 0) {
                echo '200';
            } else {

                echo 'Unable to delete' . $r;
            }
        } else {
            echo "permission Denied";
        }
    }
    public function create()
    {
    }
    public function read()
    {
        include_once './db/Post.php';
        $post = new Post();
        $posts = $post->find(['posts.u_id' => $_SESSION['u_id']]);
        echo json_encode($posts);
        // var_dump($posts);
    }
}
