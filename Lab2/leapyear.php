<?php
    $value = $_GET['input'];
    function isLeapYear($number){
        if(is_numeric($number) && $number > 0){
            if($number % 4 == 0 && $number % 100 != 0){
                echo "<h1>Lab02 Task 4 - Leap Year</h1>","<hr>", $number, " is a leap year";
            }else if($number % 100 == 0 && $number % 400 == 0){
                echo "<h1>Lab02 Task 4 - Leap Year</h1>", "<hr>", $number, " is a leap year";
            }else{
                echo "<h1>Lab02 Task 4 - Leap Year</h1>", "<hr>", $number," is not a leap year";
            }
        }else{
            echo "Erro, Please enter a postive integer.";
        }
    }
    function is_leapYear($number){
        if(is_numeric($number) && $number > 0){
            if($number % 4 == 0 && $number % 100 != 0){
                return true;
            }else if($number % 100 == 0 && $number % 400 == 0){
                return true;
            }else{
                return false;
            }
        }else{
            echo "Erro, Please enter a postive integer.";
        }
        
    }

    isLeapYear($value);
?>