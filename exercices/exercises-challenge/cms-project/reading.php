<?php
$file = "example.txt";
if ($handle = fopen($file, 'r')) {
    //echo $content = fread($handle, 10);// each bite = a caracter
    echo $content = fread($handle, filesize($file));// read all files

    fclose($handle);
} else {
    echo "The application is not able to write on the file";
}

