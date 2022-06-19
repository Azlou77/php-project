<?php
/*Create a way to give feeback to the users
    -if they guess correctly, you tell them
    -if they guess wrong, it was too hight or too low
    -bonus check  if the guessed is out of range

*/

$min = 1; 
$max = 50;
$guess = 16; //Change this value to test!
$num = 16; // Change this value to test!

if ($guess == $num) {
    echo "You guessed correctly!";
} elseif ($guess > $num) {
    echo "Your guess was too high!";
} elseif ($guess < $num) {
    echo "Your guess was too low!";
} else {
    echo "Your guess was out of range!";
}
// If you really want to go nuts, try this:
//$num = rand($min, $max);
?>