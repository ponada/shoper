<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 18:48
 */

class Category
{
    private $id;
    private $name;
    private $slug;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setName($name) {
        $this->name = $name;
        $this->slug = Utils::rusToLat($name);
    }

    public function  __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->slug = Utils::rusToLat($name);
    }

}