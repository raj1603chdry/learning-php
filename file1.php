<?php
    $filename = 'names1.txt';
    $handle = fopen($filename, 'r');

    echo $datain = fread($handle, filesize($filename));
    //  here in fread() the first argument is the place from where to read and second argument is the amount of data to read in.
    //  filesize() is  used to return the size of the file.

    $names_array1 = explode(',', 'Alex, Raj, Noopur, Rakesh');
    $names_array = explode(',', $datain);   //  this is not working
    //  explode is used to split the data into an array with each element separated from the passed character.

    echo '<br><br>From Variable:<br>';

    foreach ($names_array1 as $names ) {
        echo '<br>'.$names;
    }

    echo '<br><br>From file: <br>';

    foreach ($names_array as $names) {
        echo '<br>'.$names;
    }

    echo '<br><br>Imploded data<br><br>';

    $string = implode(', ', $names_array);
    // implode() does the opposite work of the explode function.

    echo $string;

    fclose($handle);
    $handle = fopen($filename, 'a');
    fwrite($handle, ', '.$string);
    fclose($handle);
?>
