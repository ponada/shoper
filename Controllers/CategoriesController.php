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

    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    public function response() {
        $relation = new CategoriesRelation();
        $categories = $relation->getAllCategories();

        include_once 'Views/header.php';
        include_once 'Views/categories.php';
        include_once 'Views/footer.php';

    }
}