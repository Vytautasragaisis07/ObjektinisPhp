<?php
class Vartotojas{
    public $name;
    public $email;
    public $phone;
}
$user = new Vartotojas();
$user->name = "Jonas";
$user->email = "jonas@gmail.com";
$user->phone = "867167261";


var_dump($user);

echo $user