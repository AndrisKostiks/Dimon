<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 5:47 AM
 */

// Use and autoloader!
require_once 'app/core/Bootstrap.php';
require_once 'app/core/Controller.php';
require_once 'app/core/Model.php';
require_once 'app/core/View.php';
require_once 'app/core/Database.php';
require_once 'app/core/Session.php';

try
{
    $app = new Bootstrap();
}
catch(Exception $e)
{
    //TO-DO something here
}
