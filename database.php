<?php 
    include "Views/header.php"; 
    include "Core/Services/DbConnect.php";
    include_once "Core/Services/DbInitialize.php";

    $categoryID = SharedService::GetVariable('category', null, 'GET');
    $productID = SharedService::GetVariable('product', null, 'GET');

?>
<script src="<?=SITE_HOST;?>Scripts/database.js"></script>

<div class="db-container">

<?php
    if (is_null($productID)) { // если не выбран продукт
        if (is_null($categoryID)) { // если категория не выбрана
?>
            <h3 class="title">Choose category!</h3> 
<?php
            $categories = CategoryRepository::GetAllCategories();
            // отображаем все категории
            foreach($categories as $category) {
?>
                <button id="category-item" class="category-items" name="<?php echo $category['ID']; ?>"><?php echo $category['Name']; ?></button>
<?php
            }
?>
            
    

<?php
        }
        else { // если категория выбрана
            // отображаем конкретную категорию -> все продукты в ней
            $selectedCategory = CategoryRepository::GetByID($categoryID);
            $products = ProductRepository::GetByCategoryID($selectedCategory[0]['ID']);
?>
            <h3 class="title"><?php echo $selectedCategory[0]['Name']; ?></h3>
<?php
            foreach($products as $product) {
                $imgPath = $product['ImagePath'];
?>
                <div id="product-item">
                    <div class="image-container">
                        <img class="product-image" src="<?php echo SITE_HOST."Core/Data/Pictures/$imgPath"; ?>">
                    </div>
                    <p><?php echo $product['Name'] ?></p>
                    <p><?php echo $product['YearOfIssue'] ?></p>
                    <p><?php echo $product['Price'] ?></p>
                    <button class="product-items" name="<?php echo $product['ID']; ?>">Подробнее</button>
                </div>
<?php
            }
?>
<?php
        }
    }
    else { // если продукт выбран
        // отображаем продукт
        $sProd = ProductRepository::GetByID($productID);
        $selectedProduct = $sProd[0];
        $imgPath = $selectedProduct['ImagePath'];
        $features = FeatureRepository::GetByProductID($selectedProduct['ID']);
?>
        <h3 class="title"><?php echo $selectedProduct['Name']; ?></h3>
        <div class="product-description">
            <div class="image-container">
                <img class="product-image" src="<?php echo SITE_HOST."Core/Data/Pictures/$imgPath"; ?>">
            </div>
            <p><span>Name: </span><?php echo $selectedProduct['Name'];  ?></p>
            <p><span>Price: </span><?php echo $selectedProduct['Price'];  ?></p>
            <p><span>Serial Number: </span><?php echo $selectedProduct['SerialNumber'];  ?></p>
            <p><span>Year: </span><?php echo $selectedProduct['YearOfIssue'];  ?></p>
            <p><span>Memory: </span><?php echo $selectedProduct['Memory'];  ?></p>
            <p><span>OS: </span><?php echo $selectedProduct['OS'];  ?></p>
            <p><span>RAM: </span><?php echo $selectedProduct['RAM'];  ?></p>
        </div>
<?php   
        if (count($features) > 0) {
?>
        <div class="product-features">
            <h3 class="title">Характеристики</h3>
            <table>
<?php
            foreach($features as $feature) {
?>
                <tr>
                    <td><?php echo $feature['Name']; ?></td>
                    <td><?php echo $feature['Value']; ?></td>
                </tr>
<?php
            }
?>
            </table>
        </div>
<?php
        }
    }
?>

</div>

<?php 
    include "Views/footer.php"; 
    include "Core/Services/DbDisconnect.php";
?>