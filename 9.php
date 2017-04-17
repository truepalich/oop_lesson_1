<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 03.04.17
 * Time: 08:43
 */

class User
{
    public $login;
    public $password;
    public $email;
    public $rating = 0;

    function login()
    {
        echo "Login function";
    }


    function logout()
    {
        echo "Logout function";
    }
}


$user1 = new User;
$user1->login();
$user1->logout();