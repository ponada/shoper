<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 29.06.2017
 * Time: 20:34
 */
class CategoriesController implements IController
{
    private $slug;
    private $page;
    public function __construct($slug, $page)
    {
        $this->slug = $slug;
        if (isset($_GET['page'])){
            $this->page = $page;
        }
    }
    public function response()
    {
        $categoryRelation = new CategoriesRelation();
        $category = $categoryRelation->getCategoryBySlug($this->slug);
        if (!isset($category)) {
            print "Error";
            return;
        }

        $productRelation = new ProductRelation();
        $categories = $categoryRelation->getAllCategories();
        $products = $productRelation->getAllProductsByCategorySlug($this->slug);

        include_once 'Views/header.php';
        include_once "Views/category.php";
        include_once 'Views/footer.php';
    }

}