
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
        parent::__construct();
    }
    public function index(){
        $this->view->render('index/index');
    }
}
