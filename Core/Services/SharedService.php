<?php

    class SharedService {

        public static function GetVariable($name,$default,$method){
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

        
        
    }

    define("PREFIX","Khmelevtsova_");
    define("TBL_CATEGORIES", PREFIX."Categories");
    define("TBL_PRODUCTS", PREFIX."Products");
    define("TBL_FEATURES", PREFIX."Features");

    define("NAME","k503labs_db2");
    //define("HOST","localhost");
    define("HOST","10.0.0.5");
    define("USER","k503labs_u2");
    //define("USER","root");
    define("PASSWORD","VrXkCm5ZO");
    //define("PASSWORD", "alex201199");
?>