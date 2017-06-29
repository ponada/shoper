<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 29.06.2017
 * Time: 20:34
 */
class ProductController implements IController
{

    private $productSlug;
    private $categorySlug;
    public function __construct($categorySlug,$productSlug)
    {
        $this->categorySlug = $categorySlug;
        $this->productSlug = $productSlug;
    }
    public function response()
    {
        echo 'ProductController';
    }
}