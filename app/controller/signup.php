<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/16/2018
 * Time: 8:57 PM
 */

class Signup extends Controller
{
    /**
     * Signup constructor.
     */
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->view->render('signup/index');
    }
}