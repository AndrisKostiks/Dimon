<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 8:03 PM
 */

class Help_Model extends Model
{
    /**
     * Help_Model constructor.
     */
    public function __construct()
    {
        $connection = parent::__construct();
        echo 'Help model!';
        var_dump($connection);
    }
}