<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>UEvent</title>
  <?php require 'utils/styles.php'; ?>
  <style>
    body {
      background-color: #b3e0ff;
      font-family: 'Quicksand', sans-serif;
      margin: 0;
      padding: 0;
    }

    hr.blueline {
      border: 10px solid #00004d;
      border-radius: 5px;
      margin: 30px auto;
      width: 80%;
    }

    .about-container {
      max-width: 95%;
      margin: 30px auto;
      background: #ffffff;
      border: 2px solid #4d4dff;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      animation: fadeIn 0.6s ease;
    }

    h1 {
      text-align: center;
      font-size: 36px;
      color: #000066;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 20px;
      border: 1px dashed #b3b3ff;
      font-size: 18px;
      line-height: 1.8;
      color: #333;
    }

    .highlight {
      font-weight: bold;
      color: #ff4d4d;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      td {
        font-size: 16px;
        padding: 15px;
      }
    }
  </style>
</head>

<body>

  <?php require 'utils/header.php'; ?>

  <hr class="blueline">

  <div class="about-container">
    <h1>About Us</h1>

    <table>
  <tr>
    <td>
      <span class="highlight">UEvent</span> is an event management platform developed for Chitkara University. It connects students, faculty, and the event management team to ensure smooth communication and coordination for all campus events.
    </td>
  </tr>
  <tr>
    <td>
      The platform offers a user-friendly interface to explore upcoming events, receive notifications, and register for various activities. It is designed to make event discovery and participation simple and efficient for everyone on campus.
    </td>
  </tr>
  <tr>
    <td>
      <strong>UEvent</strong> includes features like event listings, approval workflows, real-time updates, and communication tools to streamline the planning process and increase student engagement.
    </td>
  </tr>
  <tr>
    <td>
      Whether it’s a workshop, seminar, fest, or competition, UEvent helps Chitkara’s community stay informed, connected, and involved in all university happenings.
    </td>
  </tr>
</table>

  </div>

  <hr class="blueline">

  <?php require 'utils/footer.php'; ?>

</body>

</html>
