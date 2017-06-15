<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:10
 */
class Product
{
    protected $id;
    protected $name;
    protected $description;
    protected $icon;
    protected $price;
    protected $exist;

    public function __construct($id, $name, $description, $icon, $price, $exist)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->icon = $icon;
        $this->price = $price;
        $this->exist = $exist;
    }

    /**
     * @return mixed
     */
    public function getExist()
    {
        return $this->exist;
    }

    /**
     * @param mixed $exist
     */
    public function setExist($exist)
    {
        $this->exist = $exist;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}