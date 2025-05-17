<style>
    .event-card {
        max-width: 1100px;
        margin: 40px auto;
        background-color: #fff;
        border: 2px solid #ff6b6b;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
        padding: 25px;
        gap: 20px;
        animation: fadeIn 1s ease;
    }

    .event-card img {
        width: 100%;
        max-width: 480px;
        border-radius: 15px;
    }

    .event-details {
        flex: 1;
        min-width: 280px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .event-details h1 {
        font-size: 30px;
        color: #2e7d32;
        margin-bottom: 20px;
    }

    .event-details p {
        font-size: 16px;
        color: #444;
        line-height: 1.8;
    }

    .event-details p span {
        color: #000;
        font-weight: bold;
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

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
        .event-card {
            flex-direction: column;
            align-items: center;
        }

        .event-card img {
            width: 100%;
        }

        .event-details {
            text-align: center;
        }
    }
</style>

<div class="container">
    <div class="col-md-12">
        <hr>
    </div>

    <div class="event-card">
        <img src="<?php echo $row['img_link']; ?>" class="img-responsive" alt="Event Image">
        
        <div class="event-details">
            <h1>
                <?php echo $row['event_title']; ?>
            </h1>
            <p>
                <span>Date:</span> <?php echo $row['Date']; ?><br>
                <span>Time:</span> <?php echo $row['time']; ?><br>
                <span>Location:</span> <?php echo $row['location']; ?><br>
                <span>Student Co-ordinator:</span> <?php echo $row['st_name']; ?><br>
                <span>Staff Co-ordinator:</span> <?php echo $row['name']; ?><br>
                <span>Event Price:</span> ₹<?php echo $row['event_price']; ?>
            </p>

            <a class="btn" href="register.php?eventID=<?php echo $row['event_id']; ?>">
                <span class="glyphicon glyphicon-circle-arrow-right"></span> Register
            </a>
        </div>
    </div>
</div>
