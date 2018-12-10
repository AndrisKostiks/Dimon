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
    }
    public function index(){
        $this->view->render('login/index');
    }
    public function viewUsers(){
        $result = $this->model->getUser();
        echo '<table style="border: 1px solid black">';
        foreach ($result as $results) {
            echo '<tr style="border: 1px solid black">';
            echo '<td style="border: 1px solid black">'.'ID: ' . $results['id'] . " </td>";
            echo '<td style="border: 1px solid black">'.'EMail: ' . $results['email'] . " </td>";
            echo '<td style="border: 1px solid black">'.'Username: ' . $results['username'] . " </td>";
            echo '<td style="border: 1px solid black">'.'Password: ' . $results['pass'] . " </td>";
            echo '</tr>';
        }
        echo '</table>';
    }
    public function regUser(){
        $this->model->regUser();
    }
    public function logUser(){
        $this->model->logUser();

    }
}