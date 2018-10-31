<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/22/2018
 * Time: 12:24 PM
 */

class Data_processing_model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $data[] = $_GET;
        var_dump($data);
    }
}