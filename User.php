<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 13.06.2017
 * Time: 20:21
 */
require "Admin.php";
class User
{
    private $name = "Lena";
    private $age = 23;

    public function  __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}