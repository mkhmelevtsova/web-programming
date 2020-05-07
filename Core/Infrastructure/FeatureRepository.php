<?php

    class FeatureRepository {

        public static function GetAllFeatures() {
            return DbService::ExecuteQuery("SELECT * FROM ".TBL_FEATURES);
        }

        public static function GetByID($featureID) {
            return DbService::ExecuteQuery("SELECT * FROM ".TBL_FEATURES." WHERE ID = $featureID");
        }

        public static function GetByProductID($productID) {
            return DbService::ExecuteQuery("SELECT * FROM ".TBL_FEATURES." WHERE ProductID = $productID");
        }

        public static function AddFeature($productID, $name, $value) {
            return DbService::ExecuteQuery("INSERT INTO ".TBL_FEATURES."(ProductID, Name, Value)
            VALUES('$productID', '$name', '$value')");
        }
    }

?>