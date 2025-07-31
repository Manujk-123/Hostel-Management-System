<?php
session_start();
include('includes/config.php');

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $mysqli->prepare("SELECT username, email, password, id FROM admin WHERE (userName=? || email=?) AND password=?");
    $stmt->bind_param('sss', $username, $username, $password);
    $stmt->execute();
    $stmt->bind_result($username, $username, $password, $id);
    $rs = $stmt->fetch();
    $_SESSION['id'] = $id;
    $uip = $_SERVER['REMOTE_ADDR'];
    $ldate = date('d/m/Y h:i:s', time());
    if($rs)
    {
        header("location:dashboard.php");
    }
    else
    {
        echo "<script>alert('Invalid Username/Email or password');</script>";
    }
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
        * {
            font-family: 'Open Sans', sans-serif;
        }
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #111;
            background-repeat: no-repeat;
        }
        .login-page {
            background: url(img/hstl5.jpeg);
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-content {
            background: rgba(20, 20, 20, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 3px 10px 20px rgba(0, 0, 0, 0.8);
            color: white;
            width: 400px; /* Adjust width as needed */
        }
        .form-content h1 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 300;
        }
        .form-control {
            margin: 15px 0;
            padding: 10px;
            border: 1px solid rgba(10, 180, 180, 1);
            border-radius: 5px;
            background: rgba(20, 20, 20, 0.5);
            color: white;
            outline: none;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background: rgba(10, 180, 180, 1);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn:hover {
            background: rgba(10, 180, 180, 0.8);
        }
    </style>
</head>
<body>
    <div class="login-page">
        <div class="form-content">
            <h1>Admin Login</h1>
            <form action="" method="post">
                <label for="username" class="text-uppercase text-sm">Your Username or Email</label>
                <input type="text" placeholder="Username" name="username" class="form-control mb" required>
                <label for="password" class="text-uppercase text-sm">Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control mb" required>
                <input type="submit" name="login" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>