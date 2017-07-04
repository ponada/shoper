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
    protected $icons;
    protected $price;
    protected $exists;
    protected $slug;

    public function __construct($id, $name, $description, $icons, $price, $exists, $slug)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->icons = $icons;
        $this->price = $price;
        $this->exists = $exists;
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getExists()
    {
        return $this->exists;
    }

    /**
     * @param mixed $exist
     */
    public function setExists($exists)
    {
        $this->exists = $exists;
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

    public function getIcons() {
        return Rout::base_url().'src/images/'.$this->icons;
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
    public function setIcons($icons)
    {
        $this->icons = $icons;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getURI() {
        return Rout::base_url() . Rout::PRODUCT . '/' . $this->slug;
    }

}