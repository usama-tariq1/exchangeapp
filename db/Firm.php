<?php




class Firm extends Database
{
    protected $table_name = 'firms';
    public function findAll()
    {
        $db = Database::link();
        return $db->select($this->table_name, '*', ["ORDER" => ["firm_name" => "ASC"],]);
    }
    public function find($where)
    {
        $db = Database::link();
        return $db->select($this->table_name, '*',  $where);
    }

    public function countfirm($where)
    {
        $db = Database::link();
        return $db->count($this->table_name, '*',  $where);
    }

    public function create($firm_name)
    {
        $count = $this->countfirm(['firm_name' => $firm_name]);
        if ($count < 1) {
            $db = Database::link();

            $result =  $db->insert($this->table_name, [
                'firm_name' => $firm_name
            ]);
            return $db->id();
        } else {
            return 0;
        }
        // echo $count;
        // return $count;
    }
}
