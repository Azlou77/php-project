<?php
/*
In this course, I learn echoing, comments, variables, arrays in php
We make one ligne comment like that: "// This is a comment"
*/
// How  to echo

    echo " Hello World! <br>";

//Single quote vs double quote
$name= "Louis";
echo 'Welcome to the  Louis\'s website  make with single quote <br> ';
echo "Welcome to the  Louis\'s website make with double quote <br>";

//Escape characters
// \n new line
echo "This is a new line <br>";
echo "This is a new line 2 <br>";
// \t tab
// \\ backslash
// \$ dollar sign


//Variables can be a string, integer, float, boolean, array
$string="Hello World!";
$integer=10;
$float=10.5;
$boolean=true;
$array=array("Hello","World");

//array use for data complexes
//Indexable array
$profil=array("Louis", "Paris");

//To access for all data of the array
print_r($profil);
//add new color
$profil[]="yellow";
print_r($profil);

//To access for one or multiples data of the array
echo "<br>$profil[0],  $profil[1] <br>";
echo "$profil[0] <br>";

//Associative array
//Multiples datas in array
$brothers=array(
    "Steven"=>"Bussy","France",
    "Vincent"=>"Chelles","France",
);
echo "<pre>";
print_r($brothers);
echo "</pre>";

//Same but with another array with datas
$sisters=array(
    "Anne-Laure"=>array(
        "job"=>"ingenneer",
        "age"=>25,
        
    ),
    "Brenda"=>array(
        "job"=>"dentist",
        "age"=>30,
        
    ),
);
echo "<p> {$sisters['Anne-Laure']['job']} </p>";

//Variables can be used multiples operators: +, -, *, /, %, **
//Addition, result:15 
$x=10;
$y=5;
$add= $x + $y;
echo "$add <br>";


//Subtraction, result:5
$x=10;
$y=5;
$sub= $x - $y;
echo "$sub <br>";

//Multiplication, result:50
$x=10;
$y=5;
$multi= $x * $y;
echo "$multi <br>";

//Division résult:2
$x=10;
$y=5;
$div= $x / $y;
echo "$div <br>";

//Expotentiation, result:100000 
$x=10;
$y=5;
$exp= $x ** $y;
echo "$exp <br>";

?>
