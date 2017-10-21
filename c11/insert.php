<?php

  $accID = 5124514;
  $type = "SBEZY";
  $amount = 50000;
  $userID = 2;

  @$db = new mysqli('localhost', 'root', '', 'iwp');

  if(mysqli_connect_errno()) {
    echo '<p>Error conecting to database<br />Try again later.';
    exit;
  }

  $query = "insert into accounts values(?, ?, ?, ?)";
  $stmt = $db->prepare($query);
  $stmt->bind_param('isdi', $accID, $type, $amount, $userID);
  $stmt->execute();

  if($stmt->affected_rows > 0) {
    echo '<p>Values inserted into table</p>';
  } else {
    echo '<p>Error while inserting values into table</p>';
  }

  $db->close();

?>
