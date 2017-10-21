<!DOCTYPE html>
<html>
  <head>
    <title>UserID of accounts</title>
  </head>
  <body>
    <?php

      # this file works on the accounts table of iwp database and performs a search based on the userID of the differnets accounts
      $searchterm = 'userID';
      $searchitem = 1;

      @$db = new mysqli('localhost', 'root', '', 'iwp');
      if(mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database<br />Try again later</p>';
        exit;
      }

      $query = "select * from accounts where $searchterm = ?";
      $stmt = $db->prepare($query);
      $stmt->bind_param('s', $searchitem);
      $stmt->execute();
      $stmt->store_result();

      $stmt->bind_result($accID, $type, $amount, $userID);

      echo '<p>Number of accounts found: '.$stmt->num_rows.'</p>';

      while($stmt->fetch()) {
        echo '<p>'.$accID."\t".$type."\t".$amount.'</p>';
      }

      $stmt->free_result();
      $db->close();
    ?>
  </body>
</html>
