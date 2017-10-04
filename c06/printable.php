<?php

  class printable {
    public $testone = 'Raj';
    public $testtwo = 'Choudhary';
    public function __toString() {
      return (var_export($this, TRUE));
    }
  }

  $p = new printable;
  echo $p;

?>
