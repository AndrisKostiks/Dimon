<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 6:22 AM
 */

class ErrorClass extends  Controller
{
    /**
     * ErrorClass constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->view->render('ErrorClass/index');

    }
}
