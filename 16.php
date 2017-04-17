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
    public $isLogged;
}

$user1 = new User;
$user1->email = 'test@test.com';
$user1->rating = 10;
$user1->isLogged = TRUE;

$user2 = clone $user1;
$user2->email = 'user2@test.com';
$user2->rating = 15;
$user2->isLogged = FALSE;

echo '<pre>';
var_dump($user1);
echo '</pre>';

echo '<pre>';
var_dump($user2);
echo '</pre>';
