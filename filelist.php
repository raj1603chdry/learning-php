<?php
    $directory = 'names';

    if($handle = opendir($directory.'/')) {
        //  opendir is used to open a paricular directory.
        echo 'Looking inside \''.$directory.'\':<br><br>';

        while ($file = readdir($handle)) {
            //  readdir is used to read the contents of the directory.
            if($file!='.' && $file!='..') {
                echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
            }
        }
    } else {

    }

?>
