<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 5:47 AM
 */

class Help extends  Controller
{
    /**
     * Help constructor.
     */
    function __construct()
    {
        parent::__construct();
        echo 'We are inside Help Controller<br/>';
        $this->view->render('help/index');
    }
    /**
     * @param bool $args
     */
    public function other($args = false)
    {
        echo 'We are inside Other<br/>';
        echo 'Optional Arguments : "'.$args.'"<br/>';
        require 'app/model/help_model.php';
        $model = new Help_Model();
    }
}
