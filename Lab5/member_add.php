<!DOCTYPE html>
<head> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
    <title>Post MEMBER Form</title> 
</head> 
<body id="background"> 
    <div class="content" id="content">
        <h1>Post MEMBER Form</h1>
        <?php

        require_once ("../../conf/settings.php");  //please make sure the path is correct 
        // complete your answer here 
        // mysqli_connect returns false if connection failed, otherwise a connection value
        $dbConnect = @mysqli_connect(
            $sql_host,
            $sql_user,
            $sql_pass
        );

        // Checks if connection is successful
        if (!$dbConnect) {
            // Displays an error message
            echo "<p>Database connection failure. Error code " . mysqli_connect_errno()		. ": " . mysqli_connect_error(). "</p>";
        } else {
            console.log("Database connection sucessful");
        }

        $dbSelect = @mysqli_select_db($dbConnect,$sql_db);
        if (!$dbSelect) {
            // Displays an error message
            echo "<p>Unable to select the database.</p>"
            . "<p>Error code " . mysqli_errno($dbConnect)
            . ": " . mysqli_error($dbConnect) . "</p>";
        } else {
            console.log ("Database connection sucessful");
        }

        //Check is the table exist
        //Create table SQL statement
        $CREATE_VIPMEMBER_TABLE = "CREATE TABLE VIPMEMBER (
            MEMBER_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
            FNAME VARCHAR(40),
            LNAME VARCHAR(40),
            GENDER VARCHAR(1),
            EMAIL VARCHAR(40),
            PHONE VARCHAR(20)
            )";

        //The DESCRIBESTATUS will return true if the table exist, otherwise it will return false.
        if ($dbConnect->query ("DESCRIBE VIPMEMBER")) {
            echo "<p>Table exist</p>";
        } else {
            echo "<p>doesn't exist Creating table</p>";
            //Run Create table statement
            if ($dbConnect->query($CREATE_VIPMEMBER_TABLE) === TRUE) {
                echo "<p>Table STATUS is exist now</p><br>";
            } else {
                echo "<p>Fail to create table</p>" . $dbConnet->error;
            }
        }
        
        //Using the mysqli_real_escape_string to keep the input safe and avoid the hacking        
        $FNAME=mysqli_real_escape_string($dbConnect,$FNAME=$_POST["fname"]);
        $LNAME=mysqli_real_escape_string($dbConnect,$LNAME=$_POST["lname"]);
        $GENDER=mysqli_real_escape_string($dbConnect,$GENDER=$_POST["Gender"]);
        $EMAIL=mysqli_real_escape_string($dbConnect,$EMAIL=$_POST["email"]);
        $PHONE=mysqli_real_escape_string($dbConnect,$PHONE=$_POST["phone"]);

        //Insert statement for inserting the data to mysql
        $INSERT_RECORD = "INSERT INTO VIPMEMBER (FNAME, LNAME, GENDER, EMAIL, PHONE) VALUES ('$FNAME', '$LNAME', '$GENDER', '$EMAIL', '$PHONE');";
        
        if(mysqli_num_rows($result)<1){
            if($dbConnect->query($INSERT_RECORD) === TRUE){
                echo "<p>Post success</p>";
            }else{
                echo "<p>Fail to Post</p>";
            }
        }else{
            echo "<p>This member already exists. Please try another one.</p>";
        }

        //relase the result which contain the num_row info
        mysqli_free_result($result);

        //disconnect to the database
        $dbConnect->close();
        ?>
        
        <br>
        <br>
        <a href="http://xrf4650.cmslamp14.aut.ac.nz/lab05/vip_member.php">Return to Home Page</a>
    </div>
    </body> 
</html>