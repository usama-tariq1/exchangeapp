<?php



class ApiRate extends Database
{
    protected $table_name = 'apirates';
    public function update($date, $city_id, $item_id, $uprate, $downrate, $identifier)
    {
        $db = Database::link();
        $r  = $db->update(
            $this->table_name,
            [
                'date' => $date,
                'item_id' => $item_id,
                'uprate' => $uprate,
                'downrate' => $downrate
            ],
            [
                'identifier' => $identifier
            ]
        );
    }
}
