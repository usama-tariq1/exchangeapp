<?php




class Type extends Database
{
    protected $table_name = 'types';


    public function find($where)
    {
        $db = Database::link();
        return $db->select($this->table_name, '*',  $where);
    }
    public function findAll()
    {
        return Database::link()->select($this->table_name, '*', ["ORDER" => ["type_name" => "ASC"],]);
    }
}
