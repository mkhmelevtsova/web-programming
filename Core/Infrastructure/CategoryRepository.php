<?php

    class CategoryRepository {

        public static function GetAllCategories() {
            return DbService::ExecuteQuery("SELECT * FROM ".TBL_CATEGORIES);
        }

        public static  function GetByID($categoryID)
        {
            return DbService::ExecuteQuery("SELECT * FROM ".TBL_CATEGORIES." WHERE ID = $categoryID");
        }

        public static function AddCategory($name) {
            return DbService::ExecuteQuery("INSERT INTO ".TBL_CATEGORIES."(Name) VALUES('$name')");
        }
    }

?>