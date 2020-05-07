<?php
    include 'SharedService.php';
    include_once "Core/Infrastructure/CategoryRepository.php";
    include_once "Core/Infrastructure/ProductRepository.php";
    include_once "Core/Infrastructure/FeatureRepository.php";

    spl_autoload_register(function($name){
        include_once $name.".php";
    });

    $db = DbService::GetDatabaseInstance();
?>