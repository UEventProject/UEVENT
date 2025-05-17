<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>UEvent | Admin Panel</title>

    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7faff;
        }

        .bgImage {
            background-image: url('https://bigfoot.ink/UEvent.png');
            background-size: cover;
            background-position: center;
            height: 600px;
            margin-bottom: 30px;
            position: relative;
        }

        .bgImage::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        nav.navbar {
            background-color: #ff6b6b;
            border-radius: 0 0 25px 25px;
            padding: 15px 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .navbar-header a {
            font-size: 28px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav.navbar-nav {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
            float: right;
        }

        .nav.navbar-nav li a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        .nav.navbar-nav li a:hover {
            background-color: #ff8c8c;
        }

        .btnlogout a {
            background-color: white !important;
            color: #ff4d4d !important;
            border-radius: 20px;
        }

        .jumbotron {
            background: rgba(255, 255, 255, 0.95);
            margin-top: 80px;
            padding: 40px;
            border-radius: 25px;
            text-align: center;
            position: relative;
            z-index: 5;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        }

        .jumbotron h1 {
            font-size: 42px;
            color: #d94e4e;
        }

        @media (max-width: 768px) {
            .nav.navbar-nav {
                flex-direction: column;
                align-items: flex-end;
            }

            .jumbotron h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<?php require 'utils/styles.php'; ?>

<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <img src="https://bigfoot.ink/uevent_logo.png">
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="adminPage.php"><strong>Dashboard</strong></a></li>
                <li><a href="Stu_details.php"><strong>Students</strong></a></li>
                <li><a href="Stu_cordinator.php"><strong>Student Co-ordinators</strong></a></li>
                <li><a href="Staff_cordinator.php"><strong>Staff Co-ordinators</strong></a></li>
                <li class="btnlogout"><a class="btn btn-default navbar-btn" href="index.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
            </ul>
        </div>
    </nav>

    <!--<div class="container">-->
    <!--    <div class="jumbotron">-->
    <!--        <h1><strong>Welcome, Admin!</strong>-->
    <!--    </div>-->
    <!--</div>-->
</header>
