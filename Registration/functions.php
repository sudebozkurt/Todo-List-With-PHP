<?php
    function security($text){
        if(isset($text)){
            $clean = trim($text);
            $clean = strip_tags($clean);
            $clean = htmlspecialchars($clean);
            $clean = str_replace("insert", "", $clean);
            $clean = str_replace("INSERT", "", $clean);
            $clean = str_replace("delete", "", $clean);
            $clean = str_replace("DELETE", "", $clean);
            $clean = str_replace("drop", "", $clean);
            $clean = str_replace("DROP", "", $clean);
            return $clean;
        }
    }
?>

