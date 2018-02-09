<!DOCTYPE html>
<html>
  <head>
    <title>Uploading...</title>
  </head>
  <body>
    <h1>Uploading File...</h1>

    <?php

      if($_FILES['the_file']['error'] > 0) {
        echo "Problem: ";
        switch($_FILES['the_file']['error']) {
          case 1:
          echo 'File exceeded the upload_max_filesize';
          break;
          case 2:
          echo 'File exceeded max_file_size';
          break;
          case 3:
          echo 'File only partially uploaded';
          break;
          case 4:
          echo 'No file uploaded';
          break;
          case 6:
          echo 'Cannot upload file: No temporary directory found';
          break;
          case 7:
          echo 'Upload failed: Cannot write to disk';
          break;
          case 8:
          echo 'A PHP extension blocked the file upload';
          break;
        }
        exit;
      }

      // Does the file have the right MIME type?
      if($_FILES['the_file']['type'] != 'image/png') {
        echo "Problem: File is not a PNG image";
        exit;
      }

      // put the upload file to the uploads directory
      $uploaded_file = '/Applications/XAMPP/xamppfiles/htdocs/uploads/'.$_FILES['the_file']['name'];

      if(is_uploaded_file($_FILES['the_file']['tmp_name'])) {
        if(!move_uploaded_file($_FILES['the_file']['tmp_name'], $uploaded_file)) {
          echo 'Problem: Could not move the file to the desired location.';
          exit;
        }
      } else {
        echo 'Problem: Possible file upload attack. Filename: ';
        echo $_FILES['the_file']['name'];
        exit;
      }

      echo 'File uploaded successfully';

      // show what was uploaded
      echo '<p>You uploaded the following image:</p>';

    ?>

    <img src="/Applications/XAMPP/xamppfiles/htdocs/uploads/timeTable.png" />

  </body>
</html>
