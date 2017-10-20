<?php

  try {
    throw new Exception('A terrible error occured', 16);
  } catch (Exception $e) {
    echo 'Exception '.$e->getCode().' : '.$e->getMessage().'<br />in '.$e->getFile().' on line '.$e->getLine();
  }
?>
