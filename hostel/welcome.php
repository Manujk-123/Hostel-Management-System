<!doctype html>
<html>
<head>
    <title>Welcome to Hostel Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .banner {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(
                rgba(0, 0, 0, 0.75),
                rgba(0, 0, 0, 0.75)
            ), url('img/hstl2.jpg'); /* Background image */
            background-size: cover;
            background-position: center;
            position: relative; /* For positioning the logo */
        }
        .navbar {
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo {
            width: 120px; /* Adjust logo size */
            cursor: pointer;
        }
        .content {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: #fff;
        }
        .content h1 {
            font-size: 70px;
            margin-top: 80px;
        }
        .content p {
            margin: 20px auto;
            font-weight: 100;
            line-height: 25px;
        }
        .btn {
            width: 250px;
            padding: 15px 15px;
            text-align: center;
            margin: 20px auto;
            border-radius: 25px;
            font-weight: bold;
            border: 2px solid #009688;
            background: transparent;
            color: #fff;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            text-decoration: none; /* Remove underline from link */
        }
        .btn span {
            background: #009688;
            height: 100%;
            width: 0%;
            border-radius: 25px;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
            transition: 0.5s;
        }
        .btn:hover span {
            width: 100%;
        }
        .btn:hover {
            border: none;
        }
    </style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="img/logo.jpg" alt="Logo" class="logo"> <!-- Logo outside the container -->
        </div>
        <div class="content">
            <h1>HOSTEL MANAGEMENT SYSTEM</h1>
            <p style="padding-bottom:15px;">Your comfort and convenience are our priority, <br/> Where every moment feels like home, and every stay is a memory to treasure</p>
            <a href="login.php" class="btn"><span></span>Get Started</a>
        </div>
    </div>
</body>
</html>