<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 10/31/2018
 * Time: 5:15 PM
 */

require 'app/model/DBCheck.php';

class webUzdevums extends Controller
{
    /**
     * webUzdevums constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->view->render("webUzdevums/index");
    }
}