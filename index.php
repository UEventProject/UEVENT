<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>UEvent</title>
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #fff8f3;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 95%;
            margin: auto;
            padding: 30px 0;
        }

        h1.page-title {
            text-align: center;
            font-size: 42px;
            color: #d94e4e;
            margin-bottom: 20px;
            animation: popIn 1s ease;
        }

        .card {
            background-color: #fff;
            border: 2px solid #ff6b6b;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            margin: 30px auto;
            padding: 25px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            animation: fadeIn 1s ease;
        }

        .card img {
            width: 100%;
            max-width: 400px;
            border-radius: 14px;
            margin-right: 20px;
        }

        .card .subcontent {
            flex: 1;
            min-width: 280px;
        }

        .card h1 {
            font-size: 30px;
            color: #2e7d32;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            color: #444;
        }

        .btn {
            margin-top: 20px;
            display: inline-block;
            background-color: #ff6b6b;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn:hover {
            background-color: #ff9494;
        }

        hr {
            border: none;
            border-top: 2px dashed #ffc2c2;
            width: 80%;
            margin: 40px auto;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes popIn {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        @media (max-width: 768px) {
            .card {
                flex-direction: column;
                text-align: center;
            }

            .card img {
                margin: 0 0 20px 0;
            }
        }
    </style>
</head>
<body>

<?php require 'utils/header.php'; ?>

<div class="container">
    <h1 class="page-title"><strong>Register Your Favourite Events:</strong></h1>

    <div class="card">
        <img src="https://bigfoot.ink/image/4.jpg" class="img-responsive" alt="Technical Events">
        <div class="subcontent">
            <h1><u><strong>Technical Events</strong></u></h1>
            <p>EMBRACE YOUR TECHNICAL SKILLS BY PARTICIPATING IN OUR DIFFERENT TECHNICAL EVENTS!</p>
            <?php $id = 1;
            echo '<a class="btn" href="viewEvent.php?id=' . $id . '"><span class="glyphicon glyphicon-circle-arrow-right"></span> View Technical Events</a>'; ?>
        </div>
    </div>

    <div class="card">
        <img src="https://bigfoot.ink/image/1.jpg" class="img-responsive" alt="Gaming Events">
        <div class="subcontent">
            <h1><u><strong>Gaming Events</strong></u></h1>
            <p>EMBRACE YOUR GAMING SKILLS BY PARTICIPATING IN OUR DIFFERENT GAMING EVENTS!</p>
            <?php $id = 2;
            echo '<a class="btn" href="viewEvent.php?id=' . $id . '"><span class="glyphicon glyphicon-circle-arrow-right"></span> View Gaming Events</a>'; ?>
        </div>
    </div>

    <div class="card">
        <img src="https://bigfoot.ink/image/2.jpg" class="img-responsive" alt="On-Stage Events">
        <div class="subcontent">
            <h1><u><strong>On-Stage Events</strong></u></h1>
            <p>EMBRACE YOUR CONFIDENCE BY PARTICIPATING IN OUR DIFFERENT ON-STAGE EVENTS!</p>
            <?php $id = 3;
            echo '<a class="btn" href="viewEvent.php?id=' . $id . '"><span class="glyphicon glyphicon-circle-arrow-right"></span> View On-Stage Events</a>'; ?>
        </div>
    </div>

    <div class="card">
        <img src="https://bigfoot.ink/image/3.jpg" class="img-responsive" alt="Off-Stage Events">
        <div class="subcontent">
            <h1><u><strong>Off-Stage Events</strong></u></h1>
            <p>EMBRACE YOUR TALENT BY PARTICIPATING IN OUR DIFFERENT OFF-STAGE EVENTS!</p>
            <?php $id = 4;
            echo '<a class="btn" href="viewEvent.php?id=' . $id . '"><span class="glyphicon glyphicon-circle-arrow-right"></span> View Off-Stage Events</a>'; ?>
        </div>
    </div>
</div>

<?php require 'utils/footer.php'; ?>

</body>
</html>
