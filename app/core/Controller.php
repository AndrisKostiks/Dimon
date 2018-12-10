<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 6:31 AM
 */

class Controller
{
    /**
     * Controller constructor.
     */
    public function __construct()
    {
//        var_dump()
        $this->view= new View();
    }
    public function loadModel($name) {

        $path = 'app/models/'.$name.'_model.php';

        if (file_exists($path)) {
            require 'app/models/'.$name.'_model.php';

            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}