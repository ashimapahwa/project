<?php
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "ashima";
$con = mysqli_connect($servername, $username, $pass, $db_name);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    $query = "INSERT INTO register (username, pass) VALUES ('$username', '$pass')";

    if (mysqli_query($con, $query)) {
        echo "Record added successfully";
        exit(0);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);


?>
<html>

<body>
    
<style>
    

    .form-container {
        margin:0 auto;
        display:flex;
        flex-direction:column;
        width:500px;
        height:fit-content;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        form {
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

</style>
<div class='form-container'>

<form action="" method="POST">
    Name
    <input type="text" name="username" id="">
    Password
    <input type="password" name="pass" id="">
    <input type="submit" name="register" id="">

    Already have account <a href="login.php">Login</a>
</form>
</div>
</body>
</html>