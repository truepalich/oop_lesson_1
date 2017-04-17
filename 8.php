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
}

$user1 = new User;
$user2 = new User;
$user3 = new User;

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;
}

$car1 = new Car;
$car2 = new Car;
$car3 = new Car;

$car1->brand = 'Toyota';
$car1->model = 'Corolla';
$car1->year = 2000;
$car1->driver = $user1;

$car2->brand = 'Mazda';
$car2->model = '6';
$car2->year = 2015;
$car2->driver = $user2;

$car3->brand = 'Ford';
$car3->model = 'Taurus';
$car3->year = 1995;
$car3->driver = $user3;

echo '<pre>';
var_dump($car1);
echo '</pre>';

echo '<hr>';

echo '<pre>';
var_dump($car2);
echo '</pre>';

echo '<hr>';

echo '<pre>';
print_r($car3);
echo '</pre>';