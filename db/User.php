<?php


// require_once 'Database.php';

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class User extends Database
{
    protected $table_name = 'users';
    protected $join = [
        "[>]cities" => "city_id"
    ];
    protected $db;
    // public function __construct()
    // {
    //     $db = Database::link();
    // }

    public function createuser($name, $cell, $city_id, $password, $profile)
    {
        $db = Database::link();
        $r = $db->insert($this->table_name, [
            
            'u_name' => $name,
            'u_cell' => $cell,
            'city_id' => $city_id,
            'u_password' => $password,
            'u_profile' => $profile
            
        ]);
        
        echo $db->id();
        
        
        // if ($r) {
        //     echo 200;
        // } else {
        //     echo 500;
        // }
    }
    public function profileup($profile){
        $db = Database::link();
        $r = $db->insert($this->table_name, [
            'u_profile' => $profile
            
        ]);
        echo $db->id();
    }
    public function update($u_id, $name, $cell, $city_id, $password, $profile)
    {
        $db = Database::link();
        $r = $db->update(
            $this->table_name,
            [
                'u_name' => $name,
                'u_cell' => $cell,
                'city_id' => $city_id,
                'u_password' => $password
                
            ],
            [
                'u_id' => $u_id
            ]
        );
        $s = $db->update($this->table_name, [
            'u_profile' => $profile
            
        ],
            [
                'u_id' => $u_id
            ]
        );
        return $s->rowCount()+$r->rowCount();
        // return $profile;
    }
    public function find($where)
    {

        $db = Database::link();
        $r = $db->select($this->table_name, $this->join, '*', $where);
        return $r;
    }
    public function authorizeuser($cell, $password)
    {
        $db = Database::link();
        $r = $db->count($this->table_name, [
            'role_id' => 0,
            'u_cell' => $cell,
            'u_password' => $password
        ]);
        if ($r == 1) {
            $ud = $this->find(['u_cell' => $cell])[0];
            $userdata = ['u_profile' => $ud['u_profile'], 'u_name' => $ud['u_name'], 'u_id' => $ud['u_id']];
        } else {
            $userdata = '';
        }
        $response = array();
        $response = ['r' => $r, 'userdata' => $userdata];
        return $response;
    }
}
