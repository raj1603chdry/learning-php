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
      $result = $stmt->get_result();

      echo '<p>Number of accounts found: '.mysqli_num_rows($result).'</p>';

      while($array = mysqli_fetch_assoc($result)) {
        echo '<p>'.$array['accID']."\t".$array['type']."\t".$array['amount'].'</p>';
      }

      $stmt->free_result();
      $db->close();
    ?>
  </body>
</html>
