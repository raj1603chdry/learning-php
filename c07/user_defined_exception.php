<?php

  class myException extends Exception {
    function __toString() {
      return '<strong>Exception  '.$this->getCode().'</strong>: '.$this->getMessage().'<br />in '.$this->getFile().' on line '.$this->getLine().'<br />';
    }
  }

  try {
    throw new myException('A terrible error occurred', 16);
  } catch (myException $e) {
    echo $e;
  }

?>
