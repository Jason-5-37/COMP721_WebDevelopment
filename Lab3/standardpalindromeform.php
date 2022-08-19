<?php
    $userinput=$_POST['input'];
    
    $input=strtoupper( $_POST['input']);
    $reverse = strrev($input);
    $result = strcmp($reverse ,$input);

    $input2=preg_replace('/[^A-Za-z0-9]/',"",$input);
    $reverse2 = strrev($input2);
    $result2 = strcmp($reverse2 ,$input2);


    echo "The text you enter: '", $userinput, "'";
    if($result==0){
        echo " is a Perfect Palindrome!";
    }elseif($result2==0){
        echo "is a Standard Palindrome.";
    }
    else{
        echo " is not a Palindrome.";
    }
?>