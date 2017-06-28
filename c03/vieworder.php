<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Customer Orders</title>
        <link href="table.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Customer Order</h2>

        <?php
            $orders = file("orders.txt");
            // Reading the entire file at once.
            // Each line of the file becomes new element of the array.

            // counting the number of orders in the array.
            $number_of_orders = count($orders);

            if($number_of_orders == 0) {
                echo '<p><b>No orders pending.<br />Please try again later.</b></p>';
            }

            echo "<table>\n";
            echo "<tr>
                    <th>Order Date</th>
                    <th>Tires</th>
                    <th>Oil</th>
                    <th>Spark Plugs</th>
                    <th>Total</th>
                    <th>Address</th>
                  </tr>";

            for($i = 0 ; $i < $number_of_orders; $i++) {
                // split up each line
                $line = explode("\t", $orders[$i]);

                // keep only the number of items ordered.
                $line[1] = intval($line[1]);
                $line[2] = intval($line[2]);
                $line[3] = intval($line[3]);

                // output for each order.
                echo "<tr>
                        <td>".$line[0]."</td>
                        <td style = \"text-align: right;\">".$line[1]."</td>
                        <td style = \"text-align: right;\">".$line[2]."</td>
                        <td style = \"text-align: right;\">".$line[3]."</td>
                        <td style = \"text-align: right;\">".$line[4]."</td>
                        <td>".$line[5]."</td>
                      </tr>";
            }
            echo "</table>";
        ?>

    </body>
</html>
