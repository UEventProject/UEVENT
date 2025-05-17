<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>UEvent</title>
  <?php require 'utils/styles.php'; ?>
  <style>
    body {
      font-family: 'Quicksand', sans-serif;
      background-color: #f0faff;
      margin: 0;
      padding: 0;
    }

    h1.page-title {
      text-align: center;
      font-size: 38px;
      color: #2d6a4f;
      margin: 40px auto 20px;
      animation: fadeIn 1s ease;
    }

    .cards-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      max-width: 95%;
      margin: 30px auto;
      padding-bottom: 40px;
    }

    .contact-card {
      background-color: #ffffff;
      border: 2px solid #4da6ff;
      border-radius: 20px;
      padding: 30px 25px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      animation: popIn 0.8s ease-in-out;
    }

    .contact-card h2 {
      font-size: 28px;
      color: #003366;
      margin-bottom: 20px;
    }

    .contact-card p {
      font-size: 16px;
      color: #333;
      line-height: 1.6;
    }

    .glyphicon {
      color: #ff5a5f;
      margin-right: 8px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes popIn {
      from { transform: scale(0.95); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }

    @media (max-width: 768px) {
      .cards-container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>

<body>

<?php require 'utils/header.php'; ?>

<hr class="blueline">

<h1 class="page-title">Contact Us</h1>

<div class="cards-container">
  <div class="contact-card">
    <h2><span class="glyphicon glyphicon-user"></span> Priyanshi Hans</h2>
    <p>
      <span class="glyphicon glyphicon-envelope"></span> Email: priyanshi1399.be23@chitkarauniversity.edu.in<br>
      <span class="glyphicon glyphicon-phone"></span> Mobile: 123123123
    </p>
  </div>

  <div class="contact-card">
    <h2><span class="glyphicon glyphicon-user"></span> Priti Chaudhary</h2>
    <p>
      <span class="glyphicon glyphicon-envelope"></span> Email: priti1380.be23@chitkarauniversity.edu.in<br>
      <span class="glyphicon glyphicon-phone"></span> Mobile: 123123123
    </p>
  </div>
  <div class="contact-card">
    <h2><span class="glyphicon glyphicon-user"></span> Pappu Chaudhary</h2>
    <p>
      <span class="glyphicon glyphicon-envelope"></span> Email: pappu1298.be23@chitkarauniversity.edu.in<br>
      <span class="glyphicon glyphicon-phone"></span> Mobile: 123123123
    </p>
  </div>
  <div class="contact-card">
    <h2><span class="glyphicon glyphicon-user"></span> Manish Chaudhary</h2>
    <p>
      <span class="glyphicon glyphicon-envelope"></span> Email: Manish1388.be23@chitkarauniversity.edu.in<br>
      <span class="glyphicon glyphicon-phone"></span> Mobile: 123123123
    </p>
  </div>
</div>

<?php require 'utils/footer.php'; ?>

</body>
</html>
