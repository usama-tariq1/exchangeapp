<?php



class Contract extends Database
{

    protected $table_name = 'contracts';
    protected $join = [
        "[>]items" => ["contracts.item_id" => "item_id"],
        "[>]cities" => ["contracts.city_id" => "city_id"]

    ];
    // protected $cols = [

    //     'contracts.date',
    //     'contracts.u_id',
    //     'users.u_name',
    //     'users.u_profile',
    //     'cities.city_name',
    //     'cities.city_id',
    //     'items.item_name',
    //     'posts.post_type',
    //     'contracts.contract_id',
    //     'contracts.price',
    //     'contracts.unit',
    //     'contracts.qty',
    //     'contracts.firm1',
    //     'contracts.firm2',
    //     'rateupdates.rateupdate_id',
    //     'rateupdates.uprate',
    //     'rateupdates.downrate'


    // ];

    public function findAll()
    {
        return Database::link()->select($this->table_name, $this->join, '*');
    }

    public function find($where)
    {
        return Database::link()->select($this->table_name, $this->join, '*', $where);
    }


    public function create($item_id, $u_id, $city_id, $date, $country_name, $firm1, $firm2, $unit, $price, $qty, $qty_unit)
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
            'qty' => $qty,
            'qty_unit' => $qty_unit
        ]);
        return $db->id();
        // if ($r) {
        //     echo 200;
        // } else {
        //     echo 500;
        // }
    }
    public function update($contract_id, $item_id, $u_id, $city_id, $date, $country_name, $firm1, $firm2, $unit, $price, $qty, $qty_unit)
    {
        $db = Database::link();
        $r = $db->update(
            $this->table_name,
            [
                'item_id' => $item_id,
                'u_id' => $u_id,
                'city_id' => $city_id,
                'date' => $date,
                'country_name' => $country_name,
                'firm1' => $firm1,
                'firm2' => $firm2,
                'unit' => $unit,
                'price' => $price,
                'qty' => $qty,
                'qty_unit' => $qty_unit
            ],
            [
                'contract_id' => $contract_id
            ]
        );
        return $r->rowCount();
        // return $city_id;
        // if ($r) {
        //     echo 200;
        // } else {
        //     echo 500;
        // }
    }
}
