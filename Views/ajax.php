<?php include "header.php"; ?>
<script scr="../Scripts/ajax.js"></script>
<div class="store">
    <?php

    $laptops = simplexml_load_file("../xml/xml.xml");

    foreach ($laptops->laptop as $laptop) {
        printf(
            "<div class=\"laptops\"> 
                    <img class=\"img_product\" src=\"../xml/img/%s\">
                    <p>
                        Name: %s <br>
                        Price: %s <br>
                    </p>
                    <button id=%s>Подробнее</button>
                </div>",
            $laptop->Image,
            $laptop->Name,
            $laptop->Price,
            $laptop->SerialNumber
        );
    }
    ?>
</div>
<div id="info-more" style="display:none"></div>
<?php include "footer.php"; ?>