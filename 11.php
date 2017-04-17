<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 03.04.17
 * Time: 08:43
 */

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;

    public function showBrand()
    {
        echo $this->brand;
    }

    public function showModel()
    {
        echo $this->model;
    }

}

$car1 = new Car;
$car1->brand = 'Toyota';
$car1->model = 'Corolla';
$car1->showBrand();
$car1->showModel();

class User
{
    public $login;
    public $password;
    public $email;
    public $rating = 0;
    public $isLogged;

    function login()
    {
        $this->isLogged = TRUE;
    }

    function logout()
    {
        $this->isLogged = FALSE;
    }
}
