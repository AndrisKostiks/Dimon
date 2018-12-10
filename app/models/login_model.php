<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 12/10/2018
 * Time: 7:56 PM
 */

class login_model extends Model
{
    public function __construct()
    {

        parent::__construct();

    }
    public function getUser(){
        return $this->db->query("SELECT * FROM users")->fetchAll();
    }
    public function regUser(){
        $pass = $_POST['password'];
        $mail = $_POST['mail'];
        $username = $_POST['username'];
        $errors = [];

        if (empty($username)) echo 'Username Is required';
        if (empty($mail)) echo 'Email Is required';
        if (empty($pass)) echo 'Password Is required';

        // first check the database to make sure
        // a user does not already exist with the same username and/or email
        $check = "SELECT * FROM users WHERE username='$username' OR email='$mail' LIMIT 1";
        $result = $this->db->query($check);
        $user = ($result);
        foreach($user as $only) {
            if ($only) { // if user exists
                if ($only['username'] === $username) {
                    array_push($errors, "Username already exists");
                }

                if ($only['email'] === $mail) {
                    array_push($errors, "Email already exists");
                }
            }
        }

        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = $pass;//encrypt the password before saving in the database
            $sth = $this->db->prepare("INSERT INTO users VALUES 
            (null, :username, :email , :password)");
            $sth->execute(array(
                ':username' => $_POST['username'],
                ':password' => $_POST['password'],
                ':email' => $_POST['mail']
            ));
            $sth->execute();
            header('location: ../');
        } else {
            header('location: /login ');
        }

    }
    public function logUser(){
        $sth = $this->db->prepare("SELECT id FROM users WHERE username = :login AND pass = :password");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['pass']
        ));
        $count =  $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        } else {
            header('location: ../login');
        }
    }

}