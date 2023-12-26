<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-container {
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            width: 500px;
            height: fit-content;
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
</head>

<body>
    <form method="post">
        <div class='form-container'>
            <h1>Username</h1>
            <input type="text" name="username">
            <p><h1>Password</h1></p>
            <input type="password" name="pass">
            <input type="submit" name="login" value="Login">

            Not having an account? <a href="register.php">Signup</a>
        </div>
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "ashima";
    $con = mysqli_connect($servername, $username, $password, $db_name);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['login'])) {
        $user = mysqli_real_escape_string($con, $_POST['username']);
        $pass = mysqli_real_escape_string($con, $_POST['pass']);

        $query = "SELECT * FROM register WHERE username='$user' AND pass='$pass'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) === 1) {
            echo "<script> alert('Login successful') </script>";
            exit(0);
        } else {
            echo "<script> alert('Invalid Login') </script>";
        }
    }

    mysqli_close($con);
    ?>
</body>

</html>
