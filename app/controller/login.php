<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/16/2018
 * Time: 6:55 AM
 */

class Login extends Controller
{
    /**
     * Login constructor.
     */
    function __construct()
    {
        parent::__construct();
        echo 'We are in Login<br/>';
        $this->view->render('login/index');
    }
}