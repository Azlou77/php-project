<?php
/*In this course, I learn boolean operator, 
logical operators, if,elseif, else statements,
ternary operator, switch/matchs statements
*/
//Boolean operators
/* compare equality with ==
42 == "42" is true
2 == 7 is false

// identical comparison with ===
1 === "1" is true
'1' === 1 is false

// Greater than with >
1 > 2 is false

// Less than with <
1 < 2 is true

//Greater than or equal to with >=
1 >= 1 is true

//Less than or equal to with <=
1 <= 2 is true

//Not equal to with !=
1 != 2 is true

*/

/*Logical operators
// && Is And
-true && true is true
example: the sun is yellow and the sky is blue
-true && false is false
example: the sun is yellow and the sky is red
-false && true is false
example: the sun is red and the sky is blue

//|| Is Or
-true || true is true
Example: the sun is hot and the snow is cold
-true || false is true
Example: the sun is hot and the snow is yellow
-false || true is true
-false || false is false
Example: the sun is red and the snow is blue

//^ Is Xor
-true ^ true is false
-true ^ false is true
-false ^ false is false

*/

use function PHPSTORM_META\map;

$a= 9 > 5; //is true because 9 is greater than 5
$b= 10 !=10;// is false because 10 is not equal to 10
$c= $a && $b; //is false because $a is true and $b is false
$d= $a || $b;// is true because $a is true or $b is false
$e= $b && $c;// is false because $b is false or $c is false
$f= $a || $d;// is true because $a is true and $d is true

$logic=array($a, $b, $c, $d, $e, $f);

echo "<pre>";
var_dump($logic);
echo "</pre>";

$c = $a and $b; //is true because $a is true and $b is false
var_dump($c);
?>

<?php
// If statements syntax
$g = 15;
$h = 10;
if ($g > $h) {
    echo "g is greater than h </br>";
} else {
    echo "h is not greater than g </br>";
}

?>
<?php
/*Notes in if statements
-"if" must put first
-to have true, you must qu'une seule condition marche
-else is used the last.
*/

if (10 < 1) 
{
    echo "we stopped at if";
} 
elseif (10 < 3) 
{
    echo "we stopped at elseif </br>";
}
elseif (10 < 11) 
{
    echo "we stopped at elseif2</br>";
}

$is_logged_in = true;
if ($is_logged_in) {
    echo "<h3> You are logged in </h3>";
} else {
    echo "<h3> You are not logged in </h3>";
}
$is_logged_in = false;
if ($is_logged_in) {
    echo "<h3> You are logged in </h3>";
} else {
    echo "<h3> You are not logged in </h3>";
}

/*Alternative syntax
if (condition to check) // code to execute if condition is true
elseif (different condition to check) // different code to execute
else // catch all code
endif;

<?php if  ($home_page): ?>
    <header>
        <h1>Welcome to my website</h1>
        <h1>Welcome to my home page</h1>
    </header>

    <?php endif; ?>
// Yoda Condition
Good:
<?php if ( 10 == $i) 
{
    // do something
}
?>
Bad:
<?php if ( $i == 10) 
{
    // do something
}
?>  
*/
?>

<?php
//Ternary operators
$is_logged_in = true;
if ($is_logged_in) {
    echo "<h3> You are logged in </h3>";
} else {
    echo "<h3> You are not logged in </h3>";
}

//other way to write the same code
$is_logged_in = false;
$message = $is_logged_in ? "<h3> You are logged in </h3>" : "<h3> You are not logged in </h3>";
echo $message;

$is_logged_in = true;
$name="Teresa";
/*echo "Welcome to my website " . 
  ($is_logged_in 
  ? "Welcome to my home page" 
  : "Welcome to my blog"
  );*/

/*isset is used to check if a variable exists
  So that print Louis if I do not create variable $name
  But if I create it, so that's print the value $name
  in my case Theresa
*/
$name= isset ($name) ? $name : "Louis";

/* echo $message; result: Welcome to my website 
   Welcome to my home page
*/
echo "<br> $name ";
?>

<?php
/*Swicth statements:
  allow you  to cleary make 
  decisions based on the value
  of a single variable

  -Case mean that represent the value of the variable
  Example: switch ($total) case 10 : is total 10;
  -Default is used to catch all the other values
  Example: neither case is true so we use default, see 
  example below
  Neither case 10, case 20, case 30 is true so we use default,
    
*/
//$total = 50;
$total=10;
switch ($total) {
    case 10:
        echo "<br>Total is 10";
        break;
    case 20:
        echo "<br>Total is 20";
        break;
    case 30:
        echo "Total is 30";
        break;
    default:
        echo "<br> Total is not 10, 20 or 30";
    /*results: Total is not 10, 20 or 30 
      because 10, 20, 30 are less than 50
    */
    /*results: Total is 10
      because we delete break of case 20, case 30 or;
      because $total=10;
    */
     /*results: Total is 10, Total is 20
      because we delete break of case 10;
    */

}
?>

<?php
$total2 = 500;
switch ($total2):    //Regroup case
    case 10:
    case 20:
    case 30:
        echo "Total is less than 31";
        break;
    default:
        echo "<br> Total is 31 or more";
        endswitch;


$warrior= "Cesar";
$arme="";
switch ($warrior) {
    case "Cesar":
        $arme="Sword";
        break;
    case "Spartacus":
        $arme="Spear";
        break;
    case "Julius":
        $arme="Axe";
        break;
    default:
        $arme="";
        break;
}
?>

<?php
/*Match statements
  -Match is used to check if a variable is equal to a value
    -Example: if ($name == "Louis")
  -Match return value
*/
//function add_to add two numbers
function add_to($a, $b) {
    return $a + $b;
}
$x=0;
$result= match ($x)
{
    1 => "One",
    2 => "Two",
    default => "none",
};
//same with boolean operators
echo "<br>$result";


?>
