<?php

$error = "";


$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "hotel";


$conn = new mysqli($servername, $username_db, $password_db, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {


        header("Location: ManageRooms.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>


<body>
    <div class="parent">
        <div class="child1">
            <form action="" method="post">
                <p>login</p>
                <input type="text" name="username" placeholder="UserName"><br>
                <input type="password" id="password" name="password" placeholder="Password"><br>
                <div>
                    <h3>Show Password</h3>
                    <input type="checkbox" id="showPassword" onclick="showPassword()"><br>
                </div>
                <span style="color: red;"><?php echo $error; ?></span><br><br>
                <input type="submit" name="submit" value="log in" class="submit">
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>