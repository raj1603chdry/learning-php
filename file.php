<?php
    /*
        r for reading
        w for writing
        a for appending
    */

    /*
    $handle = fopen('names.txt', 'a');    //  first argument is filename and second is the mode.

    fwrite($handle, 'Raj Choudhary is the best!'."\n");
    //  the escape sequence has to be inbetween " ".
    fwrite($handle, 'You are an amazing coder.');

    fclose($handle);
    */

    if(isset($_POST['name'])) {
        $name = $_POST['name'];
        if(!empty($name)) {

            $handle = fopen('names.txt', 'a');
            fwrite($handle, $name."\n");
            fclose($handle);

            $readin = file('names.txt');    //  for reading a file and create an array of its elements.
            $readin_count = count($readin); //  to count the number of elements in the array $readin
            $count = 1;

            foreach ($readin as $fname) {
                echo trim($fname);
                if($count != $readin_count) {
                    echo ', ';
                } else {
                    echo '.';
                }
                $count++;
            }

        } else {
            echo 'Please enter the field.<br>';
        }
    }

?>

<form action="file.php" method="POST">
    Enter a text<br>
    <input type="text" name="name">
    <br><br>
    <input type="submit" value="Submit">
</form>
