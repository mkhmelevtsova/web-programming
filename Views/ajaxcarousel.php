<?php include "header.php"; ?>

<script src="../scripts/jquery.jcarousel.js"></script>
<script src="../scripts/ajaxjquerylibs.js"></script>

<?php

$laptops = simplexml_load_file("../xml/xml.xml");
printf("<div class=\"main-carousel\">");
printf("<div class=\"jcarousel\"><ul>");

foreach ($laptops->laptop as $laptop) {
    printf(
        " 
        <li>
            <img class=\"img_products\" src=\"../xml/img/%s\" id=\"%s\"> 
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
<?php include "footer.php"; ?>