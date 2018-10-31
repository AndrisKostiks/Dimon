<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 6:39 AM
 */

class View
{
    public function __construct()
    {
    }

    public function render($name)
    {
        require 'app/view/'.$name.'.phtml';
    }
}