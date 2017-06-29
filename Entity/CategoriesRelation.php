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
        foreach ($array as $item){
            $categories[] = new Category($item["id"], $item["name"], $item["slug"]);
        }
        return $categories;
    }
    public function getCategoryById($id){
        $item = DBManager::getDB()->getFieldById(self::TABLE_NAME, $id);
        return $item ? new Category($item["id"], $item["name"], $item["slug"]) : null;
    }
}