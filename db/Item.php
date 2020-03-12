<?php




class Item extends Database
{
    protected $table_name = 'items';

    protected $join = [
        "[>]types" => "type_id"
    ];

    public function findAll()
    {
        return Database::link()->select($this->table_name, $this->join, '*');
    }

    public function find($where)
    {
        $db = Database::link();
        return $db->select($this->table_name, $this->join, '*',  $where);
    }

    public function count($where)
    {
        $db = Database::link();
        return $db->count($this->table_name, '*',  $where);
    }

    public function create($item_name, $type_id)
    {
        $count = $this->count(['item_name' => $item_name]);
        if ($count < 1) {
            $db = Database::link();

            $result =  $db->insert($this->table_name, [
                'item_name' => $item_name,
                'type_id' => $type_id
            ]);
            return $db->id();
        } else {
            return 0;
        }
        // echo $count;
        // return $count;
    }
}
