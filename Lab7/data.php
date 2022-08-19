<!--file data.php -->
<?php
	// get name and password passed from client
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	$email = $_POST['email'];
	// sleep for 10 seconds to slow server response down
	//sleep(10);
	// write back the password concatenated to end of the name
	//ECHO ($name." : ".$pwd. " : " . $email);

    //connect to database
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
        //echo "<p>Database connection failure. Error code " . mysqli_connect_errno()		. ": " . mysqli_connect_error(). "</p>";
    } else {
        console.log("Database connection sucessful");
        //echo "Database connection sucessful";
    }
    
    $dbSelect = @mysqli_select_db($dbConnect,$sql_db);
    if (!$dbSelect) {
        // Displays an error message
        //echo "<p>Unable to select the database.</p>"
        //. "<p>Error code " . mysqli_errno($dbConnect)
        //. ": " . mysqli_error($dbConnect) . "</p>";
    } else {
        console.log ("Database connection sucessful");
        //echo "Database connection sucessful";
    }

	//Check is the table exist
        //Create table SQL statement
        $CREATE_USER_TABLE = "CREATE TABLE USER(
            USERNAME VARCHAR(40) PRIMARY KEY NOT NULL,
            PASSWORD VARCHAR(40),
            EMAIL VARCHAR(40)
            )";

        //The DESCRIBESTATUS will return true if the table exist, otherwise it will return false.
        if ($dbConnect->query ("DESCRIBE USER")) {
            //echo "<p>Table exist</p>";
        } else {
            echo "<p>doesn't exist Creating table</p>";
            //Run Create table statement
            if ($dbConnect->query($CREATE_USER_TABLE) === TRUE) {
                echo "<p>Table STATUS is exist now</p><br>";
            } else {
                echo "<p>Fail to create table</p>" . $dbConnet->error;
            }
        }

		//Create user
		$name=mysqli_real_escape_string($dbConnect,$name);
        $pwd=mysqli_real_escape_string($dbConnect,$pwd);
        $email=mysqli_real_escape_string($dbConnect,$email);

		$SEARCH_USER = "SELECT USERNAME, PASSWORD, EMAIL FROM USER WHERE USERNAME = '$name'";
		/*$INSERT_USER = "INSERT INTO USER (USERNAME, PASSWORD, EMAIL) VALUES ('$name', '$pwd', '$email');";*/
        $result = mysqli_query($dbConnect, $SEARCH_USER);
		
		if (mysqli_num_rows($result) == 1){
			while($row = mysqli_fetch_array($result)){
				if($row["USERNAME"] == $name && $row["PASSWORD"] == $pwd){
					echo "<p>Welcome " . $name . "</p>";
					echo "<p>Email : " . $row["EMAIL"] . "</p>";
				}else if($row["USERNAME"] == $name ){
					echo "<p>Wrong Password</p>";
				}
			}
        }else{
			echo "User is not exist";
		}

        //relase the result which contain the num_row info
        mysqli_free_result($result);

        //disconnect to the database
        $dbConnect->close();

?>
