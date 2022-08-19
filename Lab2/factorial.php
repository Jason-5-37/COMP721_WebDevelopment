<?php
    include "mathfunctions.php";

    $value = $_GET["input"];
    if($value > 0 & is_numeric($value)) {
        $value = factorial($value);
        echo $value;
    }else{
        echo "Error, Please enter a positive integer";
    }

?>