<?php
require_once 'utils/header.php';
require_once 'utils/styles.php';
require_once 'classes/db1.php';   // → $conn  (mysqli)

/* 1 ▸ fetch & validate USN */
if (empty($_POST['usn'])) {
    echo "<script>alert('USN missing');window.history.back();</script>";
    exit;
}
$usn = $_POST['usn'];

/* 2 ▸ query: events that already include this USN + info + type title */
$sql = "
SELECT  e.event_title,
        e.event_price,
        et.type_title,
        ei.Date,
        ei.time,
        ei.location
FROM    events       AS e
JOIN    event_info   AS ei ON ei.event_id = e.event_id
JOIN    event_type   AS et ON et.type_id  = e.type_id
WHERE   JSON_CONTAINS(e.participents, JSON_QUOTE(?), '$')
ORDER BY ei.Date, ei.time
";


$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $usn);
$stmt->execute();
$result = $stmt->get_result();
?>
<!-- 3 ▸ front-end output -->
<div class="content">
  <div class="container">
    <h1>Registered Events</h1>

    <?php if ($result->num_rows): ?>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Event</th>
          <th>Type</th>
          <th>Price</th>
          <th>Date</th>
          <th>Time</th>
          <th>Location</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= htmlspecialchars($row['event_title'])   ?></td>
          <td><?= htmlspecialchars($row['type_title'])    ?></td>
          <td><?= htmlspecialchars($row['event_price'])   ?></td>
          <td><?= htmlspecialchars($row['Date'])          ?></td>
          <td><?= htmlspecialchars($row['time'])          ?></td>
          <td><?= htmlspecialchars($row['location'])      ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <?php else: ?>
      <p>You have not registered for any events yet.</p>
    <?php endif; ?>

  </div>
</div>

<?php
$stmt->close();
$conn->close();
require_once 'utils/footer.php';
?>
