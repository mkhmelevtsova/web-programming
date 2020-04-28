<?php

$laptops = simplexml_load_file("xml/xml.xml");
$serial = $_GET['serial'];

foreach($laptops->laptop as $laptop)
{
    if($laptop->SerialNumber == $serial){
        $arr=array(
            'name'=>$laptop->Name,
            'price'=>$laptop->Price,
            'serialNumber'=>$laptop->SerialNumber,
            'yearOfIssue'=>$laptop->YearOfIssue,
            'memory'=>$laptop->Memory,
            'operatingSystem'=>$laptop->OperatingSystem,
            'ram'=>$laptop->RAM);
        echo json_encode($arr);
    }
}
