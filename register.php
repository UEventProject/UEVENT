<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {

    // ------------------------------------------------------------------ //
    // 1.  Grab and sanity-check form fields
    // ------------------------------------------------------------------ //
    $required = ['usn','name','branch','sem','email','phone','college', 'event_id'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            echo "<script>alert('All fields are required!');window.location.href='register.php';</script>";
            exit;
        }
    }

    $usn     = $_POST['usn'];
    $name    = $_POST['name'];
    $branch  = $_POST['branch'];
    $sem     = $_POST['sem'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $college = $_POST['college'];
    $eventId = (int)$_POST['event_id'];   // cast to int insurance against injection

    //--------------------------------------------------------------------//
    // 2.  DB connection (use your own credentials file / class here)
    //--------------------------------------------------------------------//
    require_once 'classes/db1.php';   // $conn  (mysqli) must be defined inside

    // Tell MySQL we’re handling everything in a single transaction
    $conn->begin_transaction();


        //----------------------------------------------------------------//
        // 3.  Insert student into `participent`
        //----------------------------------------------------------------//
        $stmt = $conn->prepare(
            "INSERT INTO participent (usn,name,branch,sem,email,phone,college)
             VALUES (?,?,?,?,?,?,?)"
        );
        $stmt->bind_param('sssssss', $usn,$name,$branch,$sem,$email,$phone,$college);
        $stmt->execute();
        $stmt->close();

        //----------------------------------------------------------------//
        // 4.  Fetch event’s current participant JSON
        //----------------------------------------------------------------//
        $stmt = $conn->prepare(
            "SELECT participents FROM events WHERE event_id = ? FOR UPDATE"
        );
        $stmt->bind_param('i', $eventId);
        $stmt->execute();
        $stmt->bind_result($participantsJson);
        $stmt->fetch();
        $stmt->close();

        //----------------------------------------------------------------//
        // 5.  Decode → ensure we have an array → add USN if not present
        //----------------------------------------------------------------//
        $participantsArr = json_decode($participantsJson, true);

        if (!is_array($participantsArr)) {
            $participantsArr = [];                 // create new array
        }
        if (!in_array($usn, $participantsArr, true)) {
            $participantsArr[] = $usn;             // push new USN
        }

        //----------------------------------------------------------------//
        // 6.  Save array back as JSON
        //----------------------------------------------------------------//
        // 5-bis  ➜  guarantee uniqueness
        $participantsArr = array_unique($participantsArr);

        // 6.  Encode and store
        $newJson = json_encode($participantsArr, JSON_UNESCAPED_UNICODE);

        $stmt = $conn->prepare(
            "UPDATE events SET participents = ? WHERE event_id = ?"
        );
        $stmt->bind_param('si', $newJson, $eventId);
        $stmt->execute();
        $stmt->close();

        //----------------------------------------------------------------//
        // 7.  Commit + feedback
        //----------------------------------------------------------------//
        $conn->commit();
        echo "<script>alert('Registered Successfully!');window.location.href='usn.php';</script>";

    

    $conn->close();
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>UEvent</title>
    <?php require 'utils/styles.php'; ?>
</head>
<body>
<?php require 'utils/header.php'; ?>

<div class="content">
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="register.php">
                <label>Student USN:</label><br>
                <input type="text" name="usn" class="form-control" required><br>

                <label>Student Name:</label><br>
                <input type="text" name="name" class="form-control" required><br>

                <label>Branch:</label><br>
                <input type="text" name="branch" class="form-control" required><br>

                <label>Semester:</label><br>
                <input type="text" name="sem" class="form-control" required><br>

                <label>Email:</label><br>
                <input type="email" name="email" class="form-control" required><br>

                <label>Phone:</label><br>
                <input type="text" name="phone" class="form-control" required><br>

                <label>College:</label><br>
                <input type="text" name="college" class="form-control" required><br>
                
                <input type="text" hidden value="<?php echo $_GET['eventID']; ?>" name="event_id" class="form-control">

                <button type="submit" name="update" class="btn btn-primary">Submit</button><br><br>
                <a href="usn.php"><u>Already registered?</u></a>
            </form>
        </div>
    </div>
</div>

<?php require 'utils/footer.php'; ?>
</body>
</html>
