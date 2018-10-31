
<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 5:40 AM
 */

class Index extends  Controller
{
    /**
     * Index constructor.
     */
    function __construct()
    {
//        echo 'we are in index';
        parent::__construct();
        $this->view->render('index/index');
    }
}
