<?php

    DbService::ExecuteQuery("DROP TABLE ".TBL_PRODUCTS);
    DbService::ExecuteQuery("DROP TABLE ".TBL_CATEGORIES);
    DbService::ExecuteQuery("DROP TABLE ".TBL_FEATURES);

    DbService::ExecuteQuery("CREATE TABLE ".TBL_CATEGORIES."(
        ID INT auto_increment NOT NULL,
        Name VARCHAR(50) NOT NULL,
        PRIMARY KEY(ID)
        )");

    DbService::ExecuteQuery("CREATE TABLE ".TBL_PRODUCTS."(
        ID INT auto_increment NOT NULL,
        CategoryID INT NOT NULL,
        Name VARCHAR(100) NOT NULL,
        Price DECIMAL(8,2) NOT NULL,
        SerialNumber VARCHAR(100) NOT NULL,
        YearOfIssue VARCHAR(30) NOT NULL,
        Memory INT NOT NULL,
        OS VARCHAR(30) NOT NULL,
        RAM INT NOT NULL,
        ImagePath VARCHAR(100) NOT NULL,
        PRIMARY KEY(ID)
        )");

    DbService::ExecuteQuery("CREATE TABLE ".TBL_FEATURES."(
        ID INT auto_increment NOT NULL,
        ProductID INT NOT NULL,
        Name VARCHAR(100) NOT NULL,
        Value VARCHAR(100) NOT NULL,
        PRIMARY KEY(ID)
        )");

    
    $categories = simplexml_load_file(SITE_HOST."Core/Data/XML/Categories.xml");

    foreach ($categories->category as $category) {
        CategoryRepository::AddCategory($category->Name);
     }

    $products = simplexml_load_file(SITE_HOST."Core/Data/XML/Products.xml");

    foreach ($products->product as $product) {
        ProductRepository::AddProduct($product->CategoryID, $product->Name, $product->Price, 
                                $product->SerialNumber, $product->YearOfIssue, $product->Memory,
                                $product->OS, $product->RAM, $product->ImagePath);
    }

    $features = simplexml_load_file(SITE_HOST."Core/Data/XML/Features.xml");

    foreach($features->feature as $feature) {
        FeatureRepository::AddFeature($feature->ProductID, $feature->Name, $feature->Value);
    }
?>