<!DOCTYPE html>
<html>
    <head>
        <title>PHP Functions</title>
        <meta http-equiv="Contnet-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <h1>Use of PHP build-in functions</h1>
        <?PHP?>
        <?php
            /* Use of abs() and pow() build-in functions , and echo statement. */
            echo "<p>Absolute value of -9 is: ", abs(-9), ".</p>";
            echo "<p>2 to the power of 5 is: ", pow(2,5),".</p>";
        ?>
        <?php
            /* Use of decbin() and bindec() functions. */
            echo "<p>Decimal qeuivalent of 1101 is : ", bindec(1101),".</p>";
            echo "<p>Binary equivalent of 14 is: ", decbin(14),".</p>";
        ?>
    </body>
</html>