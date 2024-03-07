<?php
session_start();
include_once 'connect.php';

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $user_username, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $user_username;

            header("Location: index.php");
            exit();
        } else {
            $error_message = "Invalid password. Please try again.";
            echo "<script>
                    alert('$error_message');
                    window.location.href = 'login.php';
                  </script>";
        }
    } else {
        $error_message = "Invalid username. Please try again.";
        echo "<script>
                alert('$error_message');
                window.location.href = 'login.php';
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
    <title>Loccafe - Login Page</title>
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
    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.php"><img src="images/logo2.png"></a></div>
                </button>
            </nav>
        </div>
    </div>

    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
        <div class="input-group">
            <label>Username</label>
            <input type="text" id='username' name="username" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" id='username' name="password" required>
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>

</body>
</html>