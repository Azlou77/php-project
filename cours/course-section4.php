<?php
/*In this course I learn the OOP (programmation oriented objet)
  The classes, functions, the inheritance, static properties
*/
/*
  The classes are description or blue print
  define 2 things: properties and methods
  properties: array, data
  methods= functions
  An object can be a variable, data
  Example: car object
  properties: wheels, seats, radio
  methods: move wheels, move seats, turn on radio
  benefits: less code, for complex data
*/
//Example: car class

class Car
{
    //The encapsulation

    /*with static you can't access to functions with
      echo $toyota->motors

    */
    static $motors =  2;
    var $wheels = 4;
    private $hood = 1;
    protected $doors=3;

    //The functions

    function MoveWheels()
    {
        $this->wheels= 20;
        echo "Wheels move";
    }
    function CreateDoors()
    {
        $this->doors =6;
    }
    public static function StartMotors()
    {
        Car::$motors= 20;
    }
     public function __construct()
    {
    echo $this->wheels= 10;
    }
}

/*To retake properties and methods of the mother class Car
   Called girls's or sub-classes


class Plane extends Car
{

}

$jet = new Plane();
echo $jet->wheels;

*/
/*For instantiate a class use new + name_class
  Can create several instances of the class.
  Here the class is car, so the instances are
  Mercedes and Toyota.
*/
$toyota= new Car();
//To get data with static variable
//To get data with static function
Car::StartMotors();
echo Car::$motors;

/*
$truck= new Car();
echo $toyota->wheels . "<br>";
echo $truck->wheels =50 . "<br>";
*/
//$toyota->MoveWheels();
//$toyota->wheels= 8;
//$mercedes= new Car();

//To know how many wheels we have
echo $toyota->wheels;
//To use functions
//$toyota->MoveWheels();
//$mercedes->MoveWheels();


/* To know if the class exist
if(class_exists("Car"))
{
    echo "Great";
    }
    else
    {
        echo "No";
}
*/
?>
<?php
//Example: Personn class
class Person
{
    var $name;
    var $age;
    var $birthday= false;

    function __construct($name, $age)
    {
        $this->name= $name;
        $this->age= $age;

    }
}
$louis= new Person ('Louis', 21);
$cesar= new Person ('Cesar', 52);


?>
?>
<?php
/*custom functions
*/
function is_palindrome($string)
{
    //convert to lower case= only minuscule caracters
    $string= strtolower($string);

    //remplace all the occurences of a string
    $string= str_replace('','', $string);


    //Return the string, after changed the order of caracters
    $pal_check= ($string == strrev($string));
    return $pal_check;
}
$check_string= 'wow';
if (is_palindrome($check_string))
{
    echo "<p>$check_string wow id palindrome </p>";
}
?>
