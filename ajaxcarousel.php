<?php include "Views/header.php"; ?>
<script src="<?=SITE_HOST;?>Scripts/ajaxcarousel.js"></script>

<?php

$laptops = simplexml_load_file("xml/xml.xml");
printf("<div class=\"main-carousel\">");
printf("<div class=\"jcarousel\"><ul>");

foreach ($laptops->laptop as $laptop) {
    printf(
        " 
        <li>
            <img class=\"img_products\" src=\"xml/img/%s\" id=\"%s\"> 
        </li>
        ",
        $laptop->Image,
        $laptop->SerialNumber
    );
}
printf("</ul></div>");
printf("
    <a class=\"jcarousel-prev\" href=\"#\">Назад</a>
    <a class=\"about\" href=\"#\">Подробнее</a>
    <a class=\"jcarousel-next\" href=\"#\">Вперед</a>
");

printf("
    <div id=\"full-info\"></div>
");
printf("</div>");

?>
<?php include "Views/footer.php"; ?>