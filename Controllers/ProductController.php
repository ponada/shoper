<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 29.06.2017
 * Time: 20:34
 */
class ProductController implements IController
{

    private $slug;
    public function __construct($slug)
    {
        $this->slug = $slug;
    }
    public function response()
    {
        $categoryRelation = new CategoriesRelation();
        $categories = $categoryRelation->getAllCategories();

        $productRelation = new ProductRelation();
        $product = $productRelation->getProductBySlug($this->slug);

        include_once 'Views/header.php';
        include_once "Views/product.php";
        include_once 'Views/footer.php';
    }
}