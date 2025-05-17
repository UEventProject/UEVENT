<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>UEvent</title>
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #fffaf7;
            margin: 0;
            padding: 0;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card-form {
            background: #ffffff;
            border: 2px solid #ff5a5f;
            border-radius: 16px;
            padding: 30px 40px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            animation: popIn 1s ease-in-out;
        }

        .card-form h2 {
            text-align: center;
            color: #ff5a5f;
            margin-bottom: 25px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ffb3b3;
            border-radius: 8px;
            font-size: 14px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ff5a5f;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn:hover {
            background-color: #ff797d;
        }

        @keyframes popIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>

    <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->

    <div class="content">
        <div class="card-form">
            <h2>Login to View Events</h2>
            <form action="RegisteredEvents.php" method="POST">
                <div class="form-group">
                    <label for="usn">Student USN:</label>
                    <input type="text" id="usn" name="usn" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>

</body>
</html>
