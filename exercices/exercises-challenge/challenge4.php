<?php
/* 1: Use the Make a class called Dog
   2: Set some properties for Dog
   3: Make a method name ShowAll that echos all the properties
   4: Instantiate the class / create object and call it
   5: Called the method
*/
class Dog
{
    public $eyes_colors= "red";
    private $age = 20;
    static $master= "Louis";

    function ShowAll()
    {
        echo $this->eyes_colors . "<br>";
        echo $this->age . "<br>";
        Dog::$master . "<br>";
    }
}
$malinois= new Dog();
$malinois->ShowAll();
?>

<?php
//Challenge: Sort this array of Person objects by last, then first name!
class Person {
    var $first_name;
    var $last_name;

    function __construct( $fn, $ln ) {
        $this->first_name = $fn;
        $this->last_name = $ln;
    }

    public function get_first_name() {
        return $this->first_name;
    }

    public function get_last_name() {
        return $this->last_name;
    }
}


$rob = new Person( 'Rob', 'Casabona' );
$joe = new Person( 'Joe', 'Casabona' );
$erin = new Person( 'Erin', 'Casabona' );
$steve = new Person( 'Steve', 'Wozniack' );
$bill = new Person( 'Bill', 'Gates' );
$walt = new Person( 'Walt', 'Disney' );
$bob = new Person( 'Bob', 'Iger' );

$people = array( $rob, $joe, $erin, $steve, $bill, $walt, $bob );


?>

