<!DOCTYPE html>
<html>
    <head align="center">

    </head>
    <body>
        <?php
            $lgoinID = $_POST['username'];
            $loginPassword = $_POST['password'];


            $servername = "localhost";
            $username = "root"; // your username 
            $password = "root"; //your password 
            $database = "group_project";
            
            if ($lgoinID =='12345' and $loginPassword =='12345')
            {
                echo "Here is your today job.";
            }
            else
            {
                header('Location: index1.html');
                exit();
                
            }

            $conn = new mysqli($servername, $username, $password, $database);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT * FROM `Aircrew_member_Cabin_crew` WHERE `Group_id` = 1";
            $result = $conn->query($query);
            
            while($row = $result->fetch_assoc()) {
                echo "<br> Employee Number: ". $row["Employee_number"];
            }
        ?>
        <form action="index1.html">
            <input type="submit" value="log out">
        </form>
    </body>
</html>