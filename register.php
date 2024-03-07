<?php
session_start();
include_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        $error_message = "Registration failed. Please try again.";
        echo "<script>
                alert('$error_message');
                window.location.href = 'register.php';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Loccafe - Register</title>
    <link rel='stylesheet' href='style.css'>
    <style>
        body{
            font-size: 120%;
            background: url(https://c0.wallpaperflare.com/preview/452/100/984/restaurant-bar-coffee-shop.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }
        form {
            width: 30%;
            margin: 0px auto;
            margin-top:80px;
            padding: 20px;
            backdrop-filter: blur(5px);
            color: white;
        }
        .input-group{
            margin: 10px 0px 10px 0px;
        }
        .input-group label{
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input-group input{
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        .btn{
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #772F1A;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.php"><img src="images/logo2.png"></a></div>
                </button>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <form action="" method="post">
            <div class="input-group">
                <label>Username</label>
                <input id='email' type="text" name="username" required>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input id='email' type="text" name="email" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input id='password' type="password" name="password" required>
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>
</body>
</html>