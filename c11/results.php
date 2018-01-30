<!DOCTYPE html>
<html>
  <head>
    <title>Book-O-Rama Search Results</title>
  </head>
  <body>
    <h1>Book-O-Rama Search Results</h1>

    <?php

      // creating short variables.
      $searchtype = $_POST['searchtype'];
      $searchterm = trim($_POST['searchterm']);

      if(!$searchtype || !$searchterm) {
        echo '<p>You have not entered search details.<br />Please go back and try again.</p>';
        exit;
      }

      // whitelist the $searchtype.
      switch($searchtype) {
        case 'Author':
        case 'Title':
        case "ISBN":
              break;
        default:
              echo '<p>That is not a valid search type.<br />Please try again later.</p>';
              exit;
      }

      @$db = new mysqli('localhost', 'root', '', 'books');
      if(mysqli_connect_errno()) {
        echo '<p>Error connecting to the database.<br />Try again later.</p>';
      }


      // preparing the query and related statements.
      $query = "select ISBN, Author, Title, Price from Books where $searchtype = ?";
      $stmt = $db->prepare($query);
      $stmt->bind_param('s', $searchterm);
      $stmt->execute();
      $stmt->store_result();

      $stmt->bind_result($isbn, $author, $title, $price);

      echo "<p>Number of books found: ".$stmt->num_rows()."</p>";

      while($stmt->fetch()) {
        echo "<p><b>Title: ".$title."</b>";
        echo "<br />Author: ".$author;
        echo "<br />ISBN: ".$isbn;
        echo "<br />Price: ".$price."</p>";
      }

      $stmt->free_result();
      $db->close();

    ?>

  </body>
</html>
