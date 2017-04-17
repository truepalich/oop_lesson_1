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

    private $price;

    public function setPrice($price)
    {
        $this->price = round($price, 2);
    }

    public function getPrice($price)
    {
        $price = number_format($price, 2, '.', '');
        return print_r($this->price);
    }


}

$car1 = new Car;
$car1->setPrice(222.33333);
$car1->getPrice($car1);

//echo '<pre>';
//print_r($car1);
//echo '</pre>';