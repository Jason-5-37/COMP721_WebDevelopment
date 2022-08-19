<?php
    $day = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday",
    "Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    $count = 0;
    $count2 = 7;

    //Print the Days of the week in English
    echo "The Days of the week in English are: <br />";
    do {
        echo $day[$count];
        if($count<6){
            echo ", ";
        }else{
            echo ".";
        }
        $count++;
    }while($count < 7);

    //Print the Days of the week in French
    echo "<br /><br /> The Days of the week in French are: <br />";
    do {
        echo $day[$count2];
        if($count2<13){
            echo ", ";
        }else{
            echo ".";
        }
        $count2++;
    }
    while($count2 < 14);

?>