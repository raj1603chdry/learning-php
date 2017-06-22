<?php
    // declaring constants
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    // creating variables
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
        <?php
            /*
                Author: Raj Choudhary
                This script processes the customer's order.
            */
            $totalqty = 0;
            $totalamount = 0.0;
            $totalqty = $tireqty + $oilqty + $sparkqty;
            $totalamount = $tireqty*TIREPRICE + $oilqty*OILPRICE + $sparkqty*SPARKPRICE;
            $taxrate = 0.1;

            if($totalqty == 0) {
                echo '<p style="color: red;">Your did not order anything on the previous page.</p>';
                exit;
            } else {
                echo '<p>Order processed at '.date('H:i jS F Y').'.</p>';
                echo '<p>Your order is as follows:</p>';

                if($tireqty > 0)
                    echo htmlspecialchars($tireqty).' tires<br />';
                if($oilqty > 0)
                    echo htmlspecialchars($oilqty).' bottles of oil<br />';
                if($sparkqty > 0)
                    echo htmlspecialchars($sparkqty).' spark plugs<br />';

                echo '<p>Items ordered: '.$totalqty.'<br />';
                echo 'Subtotal: $'.number_format($totalamount, 2).'<br />';

                $totalamount *= (1 + $taxrate);

                echo 'Total including tax: $'.number_format($totalamount, 2).'</p>';

                if($tireqty < 10) {
                    $discount = 0;
                } elseif ($tireqty >= 10 && $tireqty <= 49) {
                    $discount = 5;
                } elseif ($tireqty >= 50 && $tireqty <= 99) {
                    $discount = 10;
                } elseif ($tireqty > 100) {
                    $discount = 15;
                }

                if($tireqty > 10) {
                    $totalamount -= ($totalamount * $discount)/100;

                    echo '<p>Total after discount: $'.$totalamount.'</p>';
                }
            }
        ?>
    </body>
</html>
