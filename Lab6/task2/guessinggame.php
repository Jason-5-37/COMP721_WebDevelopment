<?php 
    session_start(); // start the session 
    if (!isset ($_SESSION["record"]) && !isset ($_SESSION["RandomNum"])) { // check if session variable exists 
    $_SESSION["record"] = 0; // create the session variable 
    $_SESSION["RandomNum"] = rand(0,100); // create the session variable 
    } 
    $record = $_SESSION["record"]; // copy the value to a variable 
    $RandomNum = $_SESSION["RandomNum"]; // copy the value to a variable 
?> 

<html> 
    <head> 
        <title>Guessing Game</title> 
    </head> 
    <body> 
        <h1>Guessing Game</h1>

        <p>Enter a number between 0 and 100, then press the Guess button</p>
        <!--Input form-->
        <form action="guessinggame.php" method="post">

        <input type="text" name="GuessNumber" pattern = "^[0-9][0-9]{0,1}0{0,1}" 
        title="The input can only be the integer from 0 to 100" required>
        
        <input type="submit" value="Guess" id="button">
        </form>

        <!--update the input-->
        <?php
        //get the input
        $userinput = $_POST["GuessNumber"];

        if(isset($userinput)){
            //Update the random
            if($userinput == $RandomNum){
            //renew the random number
                $_SESSION["RandomNum"] = rand(0,100);
                $_SESSION["record"] = 0;
                $record++;
                $_SESSION["record"] = $record;
                echo "Congratulations! You guessed the hidden number!!"; // displays the number
            }else if($userinput != $RandomNum ){
            //update record
                $record++;
                $_SESSION["record"] = $record;
                echo "Keep try!";
                if($userinput > $RandomNum){
                    echo "Too high";
                }else if ($userinput < $RandomNum ){
                    echo "Too low";
                }
            }else{
                echo "Error";
            }
        }
        
        echo "<p>Number of guesses: $record</p>"; // displays the number
            
        ?> 


        <p><a href="giveup.php">Give Up</a></p>
        <p><a href="startover.php">Start Over</a></p> 
    </body> 
</html> 