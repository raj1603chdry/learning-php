<?php
# @Author: Raj Choudhary <raj1603chdry>
# @Date:   2017-08-13T15:32:36+05:30
# @Email:  raj.choudhary1603@gmail.com
# @Filename: recursion.php
# @Last modified by:   raj1603chdry
# @Last modified time: 2017-08-13T15:36:23+05:30
# @Copyright: Raj Choudhary

  function reverse_r($str) {
    if(strlen($str) > 0) {
      reverse_r(substr($str, 1));
    }
    echo substr($str, 0, 1);
    return;
  }

  function reverse_i($str) {
    for($i=1; $i<=strlen($str); $i++) {
      echo substr($str, -$i, 1);
    }
    return;
  }

  reverse_r('Raj Choudhary');
  echo '<br />';
  reverse_i('Raj Choudhary');
?>
