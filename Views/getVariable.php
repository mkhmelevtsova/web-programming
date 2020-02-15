<?php
function getVariable($name,$default,$method){
    $result = $default;
    $method = strtoupper($method);
    $meth = null;
    switch($method)
    {
        case "GET": $meth = $_GET; break;
        case "POST": $meth = $_POST; break;
    }
    if(isset($meth[$name])){
        $result = $meth[$name];
    }
    return $result;
}
