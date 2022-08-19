<!DOCTYPE html> 
<html> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Memeber Form</title> 
    </head> 
    <body>
        
    <div> 
        <h1>Add Memeber Form</h1>
        <form action="member_add.php" method="post">
            <p>

                First name:
                <input type="text" name="fname" pattern = "^\S{1,40}" 
                title="Wrong format!Only 40 words and can not start with space!" required><br>

                Last name:
                <input type="text" name="lname" pattern = "^\S{1,40}"
                title="Wrong format!Only 40 words and can not start with space!" required><br>


                <!--Share option radio input-->
                Gender:
                    <input type="radio" name="Gender" value="Male" checked>
                    <label for="Mele">Mele</label>
                    <input type="radio" name="Gender" value="Female">
                    <label for="Female">Female</label>
                <br>

                E-mail:
                    <input type="text" name="email" pattern="^\S{1,15}@\S{1,15}(.com)$"
                    title="Worong format! Only end with .com and can not start with space. And can not over 30 words and must contain @."/><br>

                Phone:
                    <input type="text" name="phone" pattern="[0-9]{1,20}$"
                    title="Worong format! Only 20 number"/>

            </p>
            <!--Submit and reset button-->
            <input type="submit" value="Post" id="button">
            <input type="reset" value="Reset" id="button">
        </form>
        <br>
        <br>
        <a href="http://xrf4650.cmslamp14.aut.ac.nz/lab05/vip_member.php">Return to Home Page</a>
    </div>
</body> 
</html>