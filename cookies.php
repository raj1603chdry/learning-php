<?php
    setcookie('username', 'raj', time() + 1000);

    // here the 1st argument is the name of the cookie. 2nd argument is the value and the 3rd argument is the expiration date of the cookie.
    // to unset a cookie we don't have any unsetcookie() we just use setcookie() again with a different time argument.

?>
