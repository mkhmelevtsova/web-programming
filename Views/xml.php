<?php include "header.php"; ?>
<textarea disabled id="xmlInformation" wrap="off">
    <?php

    $xml = file_get_contents("/xampp/htdocs/LB6/xml.xml");
    $laptops = new SimpleXMLElement($xml);

    foreach ($laptops->Laptop as $laptop) {
        echo $laptop->Name, PHP_EOL;
     }
    ?>
</textarea>
<?php include "footer.php"; ?>