<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 12/10/2018
 * Time: 9:34 PM
 */

class dashboard extends  Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false){
            Session::destroy();
            header('location: ../login');
            exit;
        }
        $this->view->js = [];
    }
    public function index(){
        $this->view->render('dashboard/index');
    }
    public function logout(){
        Session::destroy();
        header('location: ../../');
        exit;
    }
    public function getListings(){
         $this->model->getData();
    }
    public function info(){
        //prints table
        $result = $this->model->getData();
        echo '<table style="border: 1px solid black">';
        foreach ($result as $results) {
            echo '<tr style="border: 1px solid black">';
            echo '<td style="border: 1px solid black">'.'ID: ' . $results['id'] . " </td>";
            echo '<td style="border: 1px solid black">'.'EMail: ' . $results['email'] . " </td>";
            echo '<td style="border: 1px solid black">'.'Username: ' . $results['username'] . " </td>";
            echo '<td style="border: 1px solid black">'.'Password: ' . $results['pass'] . " </td>";
            echo '<td style="border: 1px solid black"><button id="'.$results["id"].'">x</button></td>';
            echo '</tr>';
        }
        echo '</table>';
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>";

        echo "<script src=\"src/js/dashboard.js\"></script>";
        //Manages data

    }

}