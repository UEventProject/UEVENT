<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>UEvent</title>
  <style>
    body {
      margin: 0;
      font-family: 'Quicksand', sans-serif;
      background: #fff8f3;
      overflow-x: hidden;
    }

    /*.bgImage {*/
    /*  background-image: url('https://bigfoot.ink/UEvent.png');*/
    /*  background-size: cover;*/
      /*background-position: center center;*/
    /*  height: 650px;*/
    /*  margin-bottom: 25px;*/
    /*  position: relative;*/
    /*  animation: floatIn 2s ease-in-out;*/
    /*}*/

    nav.navbar {
      background-color: rgba(245, 80, 80, 0.85);
      padding: 12px 24px;
      border-radius: 0 0 30px 30px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      animation: slideDown 1s ease-in-out;
    }

    .navbar-header h2 {
      color: #fff;
      font-size: 28px;
      letter-spacing: 1px;
      margin: 0;
    }

    .nav.navbar-nav {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
    }

    .nav.navbar-nav li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
      transition: all 0.3s ease;
      position: relative;
    }

    .nav.navbar-nav li a:hover::after {
      content: '🌸';
      position: absolute;
      bottom: -5px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 14px;
    }

    .btnlogout a {
      background-color: #fff;
      color: #f55252 !important;
      padding: 6px 16px;
      border-radius: 25px;
      font-weight: bold;
      transition: 0.3s ease-in-out;
    }

    .btnlogout a:hover {
      background-color: #ffcccc;
    }

    .jumbotron {
      background-color: rgba(255, 255, 255, 0.85);
      padding: 50px 30px;
      border-radius: 30px;
      max-width: 800px;
      margin: 100px auto 0;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      animation: popIn 1.2s ease-out;
    }

    .jumbotron h1 {
      font-size: 42px;
      color: #d94747;
      margin-bottom: 20px;
    }

    .jumbotron p {
      font-size: 18px;
      color: #444;
      font-style: italic;
    }

    /* Ghibli-like animations */
    @keyframes floatIn {
      from { transform: translateY(20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes slideDown {
      from { transform: translateY(-100px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes popIn {
      0% { transform: scale(0.9); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>

<header class="bgImage">
  <nav class="navbar">
    <div class="navbar-header">
<img src="https://bigfoot.ink/uevent_logo.png">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li class="btnlogout"><a href="login_form.php">Login</a></li>
    </ul>
  </nav>
  <img width="100%" src="https://bigfoot.ink/UEvent.png">


</header>

</body>
</html>
