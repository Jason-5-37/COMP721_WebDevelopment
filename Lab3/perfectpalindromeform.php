<?php
    $userinput=$_POST['input'];
    $input=strtoupper( $_POST['input']);
    $reverse = strrev($input);
    $result = strcmp($reverse ,$input);
    echo "The text you enter: '", $userinput, "'";
    if( $result==0){
        echo " is a Perfect Palindrome!";
    }else{
        echo " is not a Perfect Palindrome.";
    }
?>