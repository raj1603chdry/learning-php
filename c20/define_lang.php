<?php

  if((!isset($_SESSION['lang'])) || (!isset($_GET['lang']))) {
    $_SESSION['lang'] = "en";
    $currlang = "en";
  } else {
    $currlang = $_GET['lang'];
    $_SESSION['lang'] = $currlang;
  }

  switch($currlang) {
    case "en":
    define("CHARSET", "ISO-8859-1");
    define("LANGCODE", "en");
    break;
    case "ja":
    define("CHARSET", "UTF-8");
    define("LANGCODE", "ja");
    break;
    default:
    define("CHARSET", "ISO-8859-1");
    define("LANGCODE", "en");
    break;
  }

  header("Content-Type: text/html;charset=".CHARSET);
  header("Content-Language: ".LANGCODE);

?>
