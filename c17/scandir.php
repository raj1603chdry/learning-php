<!DOCTYPE html>
<html>
  <head>
    <title>Browse Directories</title>
  </head>
  <body>
    <h1>Browsing</h1>

    <?php

      $dir = '/Applications/XAMPP/xamppfiles/htdocs/uploads/';
      $file1 = scandir($dir);
      $file2 = scandir($dir, 1);

      echo '<p>Upload Directory is: '.$dir.'</p>';
      echo '<p>Directory Listing in alphabetical order, ascending order:</p><ul>';

      foreach($file1 as $file) {

        // striping the two entries of . and ..
        if($file != "." && $file != "..") {
          echo '<li>'.$file.'</li>';
        }
      }

      echo '</ul>';
      echo '<p>Directory Listing in alphabetical order, descending order:</p><ul>';

      foreach($file2 as $file) {

        // striping out the two entries of . and ..
        if($file != "." && $file != "..") {
          echo '<li>'.$file.'</li>';
        }
      }

      echo '</ul>';

    ?>
  </body>
</html>
