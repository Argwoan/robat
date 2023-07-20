<!DOCTYPE html>

<html >
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
   
    
    <body>
       <?php
       $database = new PDO("mysql:host=localhost;dbname=directions")
        $button = $_POST["button"];
        $servername = "localhost"; $username = "root" ; $password = "" ;
        $db = "directions";
        $conn = new mysqli($servername, $username, $password, $db);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO directions (name) VALUES ('$move')";
        if ($conn->query($sql) === TRUE) { echo " ";

        }
        else {
        echo "Error" . $conn->error; }
        $button
        print("<h2>$button</h2>"); $conn->close();

        ?>
    </body>
</html>
</body>
</html>