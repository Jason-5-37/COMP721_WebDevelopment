<html> 
    <head> 
        <title>Guessing Game</title> 
    </head> 
    <body> 
        <h1>Guessing Game</h1>
        <?php 
        session_start(); // start the session 
        $RandomNum = $_SESSION["RandomNum"]; // copy the value to a variable 
        echo "<p>The random number is $RandomNum</p>"; // displays the number
        ?>

        <p><a href="startover.php">Start Over</a></p> 
    </body> 
</html> 