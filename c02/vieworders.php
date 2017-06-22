<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Customer Results</h2>
        <?php
            @$fp = fopen('orders.txt', 'rb');
            flock($fp, LOCK_SH); //  lock file for reading

            if(!$fp) {
                echo '<p><b>No orders pending. Please try again later</b></p>';
                exit;
            }

            while(!feof($fp)) {
                $order = fgets($fp);
                echo htmlspecialchars($order).'<br />';
            }

            echo 'Final position of the file pointer is: '.ftell($fp).'<br />';
            rewind($fp);
            echo 'After rewind the position of the file pointer is: '.ftell($fp).'<br />';

            flock($fp, LOCK_UN);    //  release read LOCK_UN
            fclose($fp);
        ?>
    </body>
</html>
