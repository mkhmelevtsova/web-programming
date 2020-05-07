window.onload = function() {

    const initLocation = "http://k503labs.ukrdomen.com/535a/Khmelevtsova/database.php";

    var categories = document.getElementsByClassName('category-items');
    for (button of categories) {
        button.onclick = function(e) {
            var categoryID = e.target.name;
            location = initLocation + "?category=" + categoryID;
        }
    };

    var products = document.getElementsByClassName('product-items');
    for (button of products) {
        button.onclick = function(e) {
            var productID = e.target.name;
            location = initLocation + "?product=" + productID;
        }
    };
}