<?php



class Contract extends Database
{

    protected $table_name = 'contracts';
    protected $join = [
        "[>]items" => ["item_id" => "item_id"],
        "[>]types" => ["items.type_id" => "type_id"],
        "[>]cities" => ["contracts.city_id" => "city_id"],
        "[>]users" => ["contracts.u_id" => "u_id"]

    ];

    public function findAll()
    {
        return Database::link()->select($this->table_name, $this->join, '*');
    }

    public function find($where)
    {
        return Database::link()->select($this->table_name, $this->join, '*', $where);
    }


    public function create($item_id, $u_id, $city_id, $date, $country_name, $firm1, $firm2, $unit, $price, $qty)
    {
        $db = Database::link();
        $r = $db->insert($this->table_name, [
            'item_id' => $item_id,
            'u_id' => $u_id,
            'city_id' => $city_id,
            'date' => $date,
            'country_name' => $country_name,
            'firm1' => $firm1,
            'firm2' => $firm2,
            'unit' => $unit,
            'price' => $price,
            'qty' => $qty
        ]);
        return $db->id();
        // if ($r) {
        //     echo 200;
        // } else {
        //     echo 500;
        // }
    }
}
