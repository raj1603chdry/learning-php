<?php
    session_start();

    unset($_SESSION['username']);
    //  session_destroy() is the function used to destroy all started session than any particular session using the $_SESSION['variable']
?>
