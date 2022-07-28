<?php
include 'course-section5bis.php';
/* Namespacing: creating a separate scope for a set of functions or classes
   You can change  variables when you want except for constants
   Can't do this for functions
   Useful when you're working on WordPress or Laravel
   Example: function double

*/
function addNumbers($a, $b) {
    return $a + $b;
}
echo addNumbers(5,5);
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
function double($a)
{
    return $a + 2;
}
    echo double(5);
echo section5Bis\double(5);

?>
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
  a warning and require send an error and stop the programme

*/
?>
<?php include 'admin_footer.php'; ?>
<html>
<body>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>


</body>
</html>


<?php require 'admin_footer.php';?>
<html>
<body>
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
*/

</body>
</html>
*/
<?php
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
