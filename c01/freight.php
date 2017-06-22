<!DOCTYPE html>
<html>
    <head>
        <title>Freight Costs</title>
    </head>
    <body>
        <table style="border: 0; padding: 3px;">
            <tr>
                <td style="background-color: #cccccc; text-align: center;">Distance</td>
                <td style="background-color: #cccccc; text-align: center;">Cost</td>
            </tr>
            <?php
                $distance = 50;

                while($distance <= 250) {
                    echo '<tr>
                          <td style=\"text-align: center;\">'.$distance.'</td>
                          <td style=\"text-align: center;\">'.($distance / 10).'</td>
                          </tr>
                          ';
                    $distance += 50;
                }
            ?>
        </table>
    </body>
</html>
