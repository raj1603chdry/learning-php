<?php

  // exec version
  echo '<h1>Using exec()</h1>';
  echo '<pre>';
  exec('ls -la', $result);
  foreach($result as $line) {
    echo $line.PHP_EOL;
  }
  echo '</pre>';
  echo '<hr />';

  // passthru version
  echo '<h1>Using passthru()</h1>';
  echo '<pre>';
  passthru('ls -la');
  echo '</pre>';
  echo '<hr />';

  // system version
  echo '<h1>Using system()</h1>';
  echo '<pre>';
  $result = system('ls -la');
  echo '</pre>';
  echo '<hr />';

  // backticks version
  echo '<h1>Using backticks</h1>';
  echo '<pre>';
  $result = `ls -la`;
  echo $result;
  echo '</pre>';
  echo '<hr />';

?>
