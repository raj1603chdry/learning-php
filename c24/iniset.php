<?php

  $old_execution_time = ini_set('max_execution_time', 120);
  echo 'Old timeout is: '.$old_execution_time.'<br />';

  $max_execution_time = ini_get('max_execution_time');
  echo 'New timeout is: '.$max_execution_time.'<br />';

  show_source('list_functions.php');
?>
