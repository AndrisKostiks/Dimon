<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 12/10/2018
 * Time: 6:11 PM
 */

class registration extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->view->render('registration/index');
    }
}