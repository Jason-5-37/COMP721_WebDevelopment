<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search Member Page</title> 
    </head> 
    <body> 
        <div>
            <h1>Search Member Page</h1>
            <!--form for submit the search info to searchstatusprocess.php-->
            <form action="member_search.php" method="get">
                <p>Search Form
                    <input type="text" name="Search" pattern = "^\S{1,40}"
                    title="Wrong format!Only 40 words and can not start with space!" required />
                    <input type="submit" value="Show Result" />
                </p>
            </form>
        </div>

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
        
        //Search infor from db
        $input=$_GET["Search"];

        //using mysqli_real_escape_string keep the input safe and avoid the hacking
        $escape_string_input=mysqli_real_escape_string($dbConnect,$input);

        //Fuzzy Search
        $SEARCH_STATUS = "SELECT MEMBER_ID, FNAME, LNAME, EMAIL FROM VIPMEMBER WHERE LNAME LIKE '%$escape_string_input%'";
        $result = mysqli_query($dbConnect, $SEARCH_STATUS);

        //check if input empty
        if(!empty($escape_string_input)){
                //check if the record is exist
                if(mysqli_num_rows($result)>=1){
                    //generate the table to show record
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<td>MEMBER ID</td>";
                    echo "<td>FIRST NAME</td>";
                    echo "<td>LAST NAME</td>";
                    echo "<td>EMAIL</td>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>",$row["MEMBER_ID"],"</td>";
                        echo "<td>",$row["FNAME"],"</td>";
                        echo "<td>",$row["LNAME"],"</td>";
                        echo "<td>",$row["EMAIL"],"</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }else if (mysqli_num_rows($result)<1){
                    echo "<p>Record not found. Please try a different keyword.</p>";
                }else{
                    "<p>Error. Can not search.</p>";
                }
            }else{
            echo "<p>The search input is empty. Please try to enter something</p>";
        }    

        //disconnect to the database
        $dbConnect->close();
        ?>

        
            <br>
            <br>
            <a href="http://xrf4650.cmslamp14.aut.ac.nz/lab05/vip_member.php">Return to Home Page</a>
    </body> 
</html>