<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 21:08
 */
class Order
{
    private $id;
    private $totalPrice;
    private $status;
    private $products;
    private $userName;
    private $userAdress;
    private $userPhone;
    private $comment;
    private $dateCreate;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return mixed
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return mixed
     */
    public function getUserAdress()
    {
        return $this->userAdress;
    }

    /**
     * @return mixed
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }



}