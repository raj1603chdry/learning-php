<?php
    $prices['Tires'] = 100;
    $prices['Oil'] = 10;
    $prices['Spark Plugs'] = 4;

    foreach($prices as $key => $value) {
        echo $key.' - '.$value.'<br />';
    }

    echo '<br />';

    $products = array(array('TIR', 'Tires', 100), array('OIL', 'Oil', 10), array('SPK', 'Spark Plugs', 4));

    for($row = 0; $row < 3 ; $row++) {
        for($column = 0; $column < 3; $column++) {
            echo ' | '.$products[$row][$column];
        }
        echo ' |<br />';
    }
    echo '<br />';

    $product = array('Tires', 'Oil', 'Spark Plugs');
    sort($product);
    print_r($product);

    // sorting array depending upon key or value using ksort or asort respectively.
    // echo '<br /><br />';
    // asort($prices);
    // print_r($prices);
    // echo '<br />';
    // ksort($prices);
    // print_r($prices);
    // for sorting in reverse order use rsort, arsort, krsort.

    // sorting multidimensional array
    // for ascending pass 2nd argument SORT_ASC and for descending pass SORT_DESC.
    array_multisort($products);
    echo '<br /><br />';
    for($row = 0; $row < 3 ; $row++) {
        for($column = 0; $column < 3; $column++) {
            echo ' | '.$products[$row][$column];
        }
        echo ' |<br />';
    }
    echo '<br />';

    // using shuffle() for reordering array.
    $pictures = array('brakes.png', 'headlight.png', 'spark_plug.png', 'steering_wheel.png', 'tire.png', 'wiper_blade.png');
    shuffle($pictures);
    for($i =0; $i < 3; $i++) {
        echo '<br />'.$pictures[$i];
    }
    echo '<br />';

    //reversing an array.
    $number = range(0, 10);
    $number = array_reverse($number);
    echo '<br />';
    print_r($number);
    echo '<br /><br />';    
?>
