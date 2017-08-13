<?php
# @Author: Raj Choudhary <raj1603chdry>
# @Date:   2017-08-02T10:50:07+05:30
# @Email:  raj.choudhary1603@gmail.com
# @Filename: main.php
# @Last modified by:   raj1603chdry
# @Last modified time: 2017-08-13T15:23:00+05:30
# @Copyright: Raj Choudhary


  function hello() {
    echo '<br /><b>Hello everybody</b><br />';
  }

  function create_table($data, $header = NULL, $caption = NULL) { // here the last two parameters are optional
    echo '<table border="1" cellspacing="0">';
    if($caption) {
      echo '<caption>'.$caption.'</caption>';
    }
    if ($header) {
      echo '<tr><th>'.$header.'</th></tr>';
    }
    reset($data);
    $value = current($data);
    while($value) {
      echo '<tr><td>'.$value.'</td></tr>';
      $value = next($data);
    }
    echo '</table>';
  }

  echo 'This is the main file<br />';
  require('resuable.php');
  echo 'The script will end now.';
  hello();
  echo '<br />';
  $header = 'Data';
  $caption = 'Data about something';
  $my_data = ['First piece of data', 'Second piece of data', 'Third piece of data'];
  create_table($my_data, $header, $caption);

  // unset($variable) can be used to delete a variable manually.
  // for call by refernce used ampersand(&) before variable name.

  
?>
