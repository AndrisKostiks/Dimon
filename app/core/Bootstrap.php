<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 6:08 AM
 */

class Bootstrap
{
    /**
     * Bootstrap constructor.
     * @throws Exception
     */
    function chopExtension($filename) {
        return pathinfo($filename, PATHINFO_FILENAME);
    }

    /**
     * Bootstrap constructor.
     * @throws Exception
     */
    public function __construct()
    {

        //THIS IS NOT HOW ITS SUPPOSED TO WORK!
        //THIS IS NOT HOW  ANY OF THIS SUPPOSED TO WORK!
        //EVERYTHING FIXES COMMENT ABOVE IS REDUNDANT....
        $url = $_SERVER['REQUEST_URI'];
        $url = ltrim($url, '/');
        $url = explode('/',$url);

        $url[0]= $this->chopExtension($url[0]);

        if(empty($url[0])){
            require 'app/controller/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }
        $file = 'app/controller/'.$url[0].'.php';
        if (file_exists($file)){
            require $file;

        }else{
            require 'app/controller/ErrorClass.php';
            $controller = new ErrorClass();
            $controller->index();

        }
        $controller = new $url[0];
        $controller->loadModel($url[0]);
        if(isset($url[2])){
            $controller->{$url[1]}($url[2]);
            return false;
        } else{
            if(isset($url[1])){
                $controller->{$url[1]}();
                return false;
            }
        }
        $controller->index();
        return false;
    }
}
