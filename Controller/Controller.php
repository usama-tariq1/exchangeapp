<?php

// namespace Controller;

require 'db/Database.php';
require 'vendor/autoload.php';

// use Latte\Latte as latte;

class Controller
{



    private static function renderer()
    {
        // $loader = new \Twig\Loader\FilesystemLoader('views');


        // $twig = new \Twig\Environment($loader);

        // // $lexer = new Twig\Lexer($twig, array(
        // //     'tag_block'    => array('{', '}'),
        // //     'tag_variable' => array('{{', '}}')


        // // ));

        // // $twig->setLexer($lexer);
        // return $twig;



        $loader = new \Latte\Loaders\FileLoader('views');
        $latte = new \Latte\Engine();
        $latte->setLoader($loader);

        // $latte->setTempDirectory('views');

        return $latte;
    }


    public static function View($viewname, $data)
    {

        echo self::renderer()->render($viewname . ".php", compact('data'));
    }
}
