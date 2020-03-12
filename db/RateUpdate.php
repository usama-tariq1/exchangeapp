<?php




class RateUpdate extends Database
{

    protected $table_name = 'rateupdates';
    protected $join = [
        "[>]items" => ["item_id" => "item_id"],
        "[>]cities" => ["rateupdates.city_id" => "city_id"]


    ];

    public function findAll()
    {
        return Database::link()->select($this->table_name, $this->join, '*');
    }

    public function find($where)
    {
        return Database::link()->select($this->table_name, $this->join, '*', $where);
    }


    public function create($date, $u_id, $item_id, $city_id, $uprate, $downrate)
    {
        $db = Database::link();
        $r = $db->insert($this->table_name, [
            'item_id' => $item_id,
            'u_id' => $u_id,
            'city_id' => $city_id,
            'date' => $date,
            'uprate' => $uprate,
            'downrate' => $downrate
        ]);
        return $db->id();
        // if ($r) {
        //     echo 200;
        // } else {
        //     echo 500;
        // }
    }
    public function update($rateupdate_id, $date, $u_id, $item_id, $city_id, $uprate, $downrate)
    {
        $db = Database::link();
        $r = $db->update(
            $this->table_name,
            [
                'item_id' => $item_id,
                'u_id' => $u_id,
                'city_id' => $city_id,
                'date' => $date,
                'uprate' => $uprate,
                'downrate' => $downrate
            ],
            [
                'rateupdate_id' => $rateupdate_id
            ]
        );
        return $r->rowCount();
        // if ($r) {
        //     echo 200;
        // } else {
        //     echo 500;
        // }
    }
}
