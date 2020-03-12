<?php




class City extends Database
{
    protected $table_name = 'cities';
    public function findAll()
    {
        $db = Database::link();
        return $db->select($this->table_name, '*', ["ORDER" => ["city_name" => "ASC"],]);
    }
    public function find($where)
    {
        $db = Database::link();
        return $db->select($this->table_name, '*',  $where);
    }

    public function countcity($where)
    {
        $db = Database::link();
        return $db->count($this->table_name, '*',  $where);
    }

    public function create($city_name, $city_state)
    {
        $count = $this->countcity(['city_name' => $city_name]);
        if ($count < 1) {
            $db = Database::link();

            $result =  $db->insert($this->table_name, [
                'city_name' => $city_name,
                'city_state' => $city_state
            ]);
            return $db->id();
        } else {
            return 0;
        }
        // echo $count;
        // return $count;
    }
}
