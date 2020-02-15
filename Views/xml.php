<?php include "header.php"; ?>
<div class="store">
    <?php

    $laptops = simplexml_load_file("xml.xml");
    // $laptops = new SimpleXMLElement($xml);

    foreach ($laptops->laptop as $laptop) {
        printf("<div class=\"laptops\">
        <p>Name: %s <br>Price: %s <br>Serial: %s <br>Year: %s <br>Memory: %s <br>OS: %s <br>RAM: %s</p></div>",
        $laptop->Name,
        $laptop->Price,
        $laptop->SerialNumber,
        $laptop->YearOfIssue,
        $laptop->Memory,
        $laptop->OperatingSystem,
        $laptop->RAM);
     }
    ?>
</div>
<?php include "footer.php"; ?>