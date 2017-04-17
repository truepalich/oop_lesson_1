<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 03.04.17
 * Time: 08:43
 */

class User
{
    protected $login;
    protected $password;
    protected $email;
    protected $rating = 0;
    protected $isLogged;
}

class Manager extends User
{

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

}


class Admin extends User
{

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

}


$manager1 = new Manager;
$manager2 = new Manager;
$admin1 = new Admin;
$admin2 = new Admin;

$manager1->setEmail('manager1@test.com');
$manager2->setEmail('manager2@test.com');
$admin1->setEmail('admin1@test.com');
$admin2->setEmail('admin2@test.com');

echo '<pre>';
var_dump($manager1);
echo '</pre>';

echo '<pre>';
var_dump($manager2);
echo '</pre>';

echo '<pre>';
var_dump($admin1);
echo '</pre>';

echo '<pre>';
var_dump($admin2);
echo '</pre>';
