<?php


// namespace Database;
require_once "vendor/autoload.php";

use Medoo\Medoo as con;
// require 'link.php';

abstract class Database
{
    // private con = new con();

    // protected $table_name;

    // public function __construct()
    // {
    //     // $this->table_name = get_class();
    //     $this->table_name = strtolower(get_class($this) . "s");
    // }





    public static function link()
    {

        $db = new con([
            'database_type' => 'mysql',
            'database_name' => 'exchageapp',
            'server' => 'localhost',
            'username' => 'root',
            'password' => ''
        ]);
        return $db;
    }

    //remote

    // public static function link()
    // {

    //     $db = new con([
    //         'database_type' => 'mysql',
    //         'database_name' => 'freegmgj_exchangeapp',
    //         'server' => 'localhost',
    //         'username' => 'freegmgj_projects',
    //         'password' => '4wotcBunny.'
    //     ]);
    //     return $db;
    // }




    // public function has($st)
    // {
    //     $ft = $this->table_name;
    // }

    // public function all()
    // {
    //     return self::link()->select($this->table_name, '*');
    // }
    // public function find(array $where)
    // {
    //     return self::link()->select($this->table_name, '*', $where);
    // }
    // public function add(array $data)
    // {
    //     return self::link()->insert($this->table_name, $data);
    // }

}
