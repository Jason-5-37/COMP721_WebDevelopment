
<?php
    $input = $_GET['input'];
    echo "input is ",$input, "<br/>";
    function isEven($value){
        $remainder = $value % 2;
        $result = $remainder == 0 ? "even":"odd";
        echo $value," is a ", $result, " number.";
    }
    isEven($input);
?>