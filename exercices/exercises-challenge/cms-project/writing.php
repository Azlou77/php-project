<?php
$file = "example.txt";
if ($handle= fopen($file, 'w')) {
    fwrite($handle, "I love PHP and this really goo work");
    fclose($handle);
} else {
    echo "The application is not able to write on the file";
}
?>

