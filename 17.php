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

    public function __construct()
    {
        echo 'Car created';
    }

    public function showBrand()
    {
        echo $this->brand;
    }

    public function showModel()
    {
        echo $this->model;
    }
}


//$car1 = new Car;
//
//echo '<pre>';
//var_dump($car1);
//echo '</pre>';


class ContactForm
{
    public $name;
    public $phone;
    public $message;
}


if(!empty($_POST)) {
    $contactForm1 = new ContactForm;
    $contactForm1->name = $_POST['name'];
    $contactForm1->phone = $_POST['phone'];
    $contactForm1->message = $_POST['message'];

    echo '<pre>';
    var_dump($contactForm1);
    echo '</pre>';

}

?>

<form method="post" action="17.php">
    <input type="text" name="name" />
    <input type="text" name="phone" />
    <input type="text" name="message" />
    <button type="submit">Send</button>
</form>
