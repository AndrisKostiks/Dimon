<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 12/10/2018
 * Time: 10:20 PM
 */

class dashboard_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getData()
    {
        $data = $this->db->query("SELECT * FROM users")->fetchAll();
        return $data;
    }
}