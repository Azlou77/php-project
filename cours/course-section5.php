<?php
/*In this course I learn the organisation of code, inlude/require


*/
/*There only one http request
  Benefit:
  -Break up large sections of code
  -Separate from processing files
  -Organize your website
  Include that external file
  Can reuse parts: header, footer
*/
/*Include is statement if the file doesn't exit send
  a warning and require send an error and stop the programm

*/
/*Include_once et require_once return a boolean and do not include again
  else php put an error
*/
/* Namespacing: creating a separate scope for a set of functions or classes
   You can change  variables when you want except for constants
   Can't do this for functions
   Useful when you're working on WordPress or Laravel
   Example: function double

*/
?>
<?php
$a = 32;
echo "a is " . is_double($a) . "<br>";

?>
