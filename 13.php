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

class WaterCar extends Car
{
    public $waterSpeed;
}