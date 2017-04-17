<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 03.04.17
 * Time: 08:43
 */

$arr = array('name' => 'Stas', 'email' => 'civictyper13@gmail.com', 'message' => "Hello world");
$obj = (object)$arr;

echo '<pre>';
var_dump($obj);
echo '</pre>';