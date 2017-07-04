<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 29.06.2017
 * Time: 18:42
 */
class CategoriesRelation
{
    const TABLE_NAME = 'categories';

    public function getAllCategories(){
        $array = DBManager::getDB()->getAllData(self::TABLE_NAME);
        $categories = array();
        foreach ($array as $category){
            $categories[] = new Category($category["id"],$category["name"], $category["slug"]);
        }
        return $categories;
    }
    public function getCategoryBySlug($slug){
        $category = DBManager::getDB()->getDataFromTableWhere(self::TABLE_NAME, 'slug', $slug);
        return $category ? new Category($category["id"],$category["name"], $category["slug"]) : null;
    }
}