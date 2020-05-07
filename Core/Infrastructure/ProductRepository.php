<?php

    class ProductRepository {

        public static function GetAllProducts() {
            return DbService::ExecuteQuery("SELECT * FROM ".TBL_PRODUCTS);
        }

        public static function GetByID($productID) {
            return DbService::ExecuteQuery("SELECT * FROM ".TBL_PRODUCTS." WHERE ID = $productID");
        }

        public static function GetByCategoryID($categoryID) {
            return DbService::ExecuteQuery("SELECT * FROM ".TBL_PRODUCTS." WHERE CategoryID = $categoryID");
        }

        public static function AddProduct($categoryID, $name, $price, $serialNumber, $yearOfIssue, $memory, $os, $ram, $imagePath) {
            return DbService::ExecuteQuery("INSERT INTO ".TBL_PRODUCTS."(CategoryID, Name, Price, SerialNumber, YearOfIssue, Memory, OS, RAM, ImagePath)
            VALUES('$categoryID', '$name', '$price', '$serialNumber', '$yearOfIssue', '$memory', '$os', '$ram', '$imagePath')");
        }
    }

?>