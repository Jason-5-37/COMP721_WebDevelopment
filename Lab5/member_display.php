<html> 
    <head> 
        <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
        <title>Display all Members Page</title> 
    </head> 
    <body> 
        <h1>Display all Members Page</h1> 
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

            $SELECT_MEMBER = "SELECT MEMBER_ID, FNAME, LNAME FROM VIPMEMBER";
            $result = mysqli_query($dbConnect, $SELECT_MEMBER);
            
            if(mysqli_num_rows($result)>=1){
                    //generate the table to show record
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<td>MEMBER_ID</td>";
                    echo "<td>FIRST NAME</td>";
                    echo "<td>LAST NAME</td>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>",$row["MEMBER_ID"],"</td>";
                        echo "<td>",$row["FNAME"],"</td>";
                        echo "<td>",$row["LNAME"],"</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }else if (mysqli_num_rows($result)<1){
                    echo "<p>Record not found. Please try a different keyword.</p>";
                }else{
                    "<p>Error. Can not show car table.</p>";
                }

        //disconnect to the database
        $dbConnect->close();
        ?> 
        
        <br>
        <br>
        <a href="http://xrf4650.cmslamp14.aut.ac.nz/lab05/vip_member.php">Return to Home Page</a>
    </body> 
</html> 