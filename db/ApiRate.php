<?php



class ApiRate extends Database
{
    protected $table_name = 'apirates';
    public function update($date, $uprate, $downrate, $identifier)
    {
        $db = Database::link();
        $r  = $db->update(
            $this->table_name,
            [
                'date' => $date,
                'uprate' => $uprate,
                'downrate' => $downrate
            ],
            [
                'identifier' => $identifier
            ]
        );
        return $r->rowCount();
    }
    public function find($where)
    {
        $db = Database::link();
        return $db->select($this->table_name, '*', $where);
    }
    public function findAll()
    {
        $db = Database::link();
        return $db->select($this->table_name, '*');
    }
}
