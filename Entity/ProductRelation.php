<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 04.07.2017
 * Time: 18:52
 */
class ProductRelation
{
    const TABLE_NAME = 'products';
    public function getAllProductsByCategorySlug($slug){
        $array = DBManager::getDB()->getDataFromTableWhere(self::TABLE_NAME,'category_slug', $slug);
        $products = array();
        foreach ($array as $product){
            $products[] = new Product($product["id"], $product["name"], $product["description"], $product["image"], $product["icons"], $product["price"], $product["is_exists"], $product["slug"]);
        }
        return $products;
    }
    public function getProductBySlug($slug){
        $product = DBManager::getDB()->getFieldBySlug(self::TABLE_NAME, $slug);
        return $product ? new Product($product["id"], $product["name"], $product["description"], $product["image"], $product["icons"], $product["price"], $product["is_exists"], $product["slug"]) : null;
    }
}