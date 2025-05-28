<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Global Variable</h1>
<?php
$x = 5; // global variable

function myTest() 
{
  global $x; // bring global $x into local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>


<h1>Global Variable</h1>
<?php
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
echo "<h2>$txt1</h2>";
echo "<p> output is $txt2 </p>";

echo "<br><br><br><h1>PHP echo and print Statements</h1><br><br>";             // echo inai polathan print um 2 um same

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
echo ". $txt1 ." ;
echo '<p>Study PHP at ' . $txt2 . '</p>';

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
print ". $txt1 ." ;
print '<p>Study PHP at ' . $txt2 . '</p>';

echo "<br><br><br><h1>PHP Integer string float </h1><br><br>";            

$x = "Hello world!";                         //  string
echo($x);
echo "<br>";

$y = 10;                                     //  integer
echo($y);
echo "<br>";

$z = 10.365;                                 //  float
echo($z);
echo "<br>";

$cars = array("Volvo","BMW","Toyota");       //  arrays
var_dump($cars);


$n = "Hello world!";
$n = null;                                  // null value 
echo ($n);
echo "<br>";
                                           //Double or Single Quotes
echo "Hello";
echo "<br>";
echo 'Hello';
echo "<br>";

$b = true;                                            // boolean
var_dump($x); 
echo "<br>";

$b = "true";                                        // string
var_dump($x); 
echo "<br>";

$x = "John";                                        // double quote
echo "The Leader is $x";
echo "<br>";

$y = "John";                                         //single quote
echo 'The Leader is $y';                            // $y print aagathu so double quote is must used.
echo "<br>"; 

$txt1 = "W3Schools.com";
echo '<h2> Study PHP at' . $txt1 . '</h2>';         //single quote
echo "<h2>Study PHP at $txt1 </h2>";                // double quote
echo "<br>"; 

echo strlen("Hello world!");                       // string leangth
echo "<br>";  

echo str_word_count("Hello world!");
echo "<br>"; 

$x = "Hello World!";                             // uppercase
echo strtoupper($x);
echo "<br>"; 

$x = "Hello World!";                           // lowercase
echo strtolower($x);
echo "<br>"; 

$x = "Hello World!";                           // string replace
echo str_replace("World", "Dolly", $x);
echo "<br>"; 

$x = "Hello World!";
echo strrev($x);                              // string reverse
echo "<br>"; 

$x = "Hello";
$y = "World";                                 // "Hello World!"
$z = $x . " " . $y;
echo $z;                                     
echo "<br>";                                

$x = "Hello World!";                          // start_position = 6 inai thandi தொடங்கும், ஆகவே இது 7வது எழுத்திலிருந்து தொடங்கும்.
echo substr($x, 6, 5);                        // length = 5 → அடுத்த 5 எழுத்துக்களை மட்டும் எடுக்க வேண்டும் என்று கூறுகிறது.
echo "<br>";  

$x = "Hello World!";
echo substr($x, 6);
echo "<br>";

$x = "Hello\nWorld";                          // new line
echo $x;
echo "<br>";

$x = "Escape php variable name \$myvar";        //variables
echo $x;
echo "<br>";

$x = "We are the so-called \"Vikings\" from the north.";        //double quote
echo $x;
echo "<br>";

$x = "\110\145\154\154\157";                   //octal value
echo $x;
echo "<br>";

$x = "\x48\x65\x6c\x6c\x6f";                   // hex value
echo $x;
echo "<br>";

$a = 5;                                        // data type 
$b = 5.34;
$c = "25";
var_dump($a);
var_dump($b);
var_dump($c);
echo "<br>";
 
$x = 59;                                       //Check if the type of a variable is integer aah enpathai true or false il tharum
var_dump(is_int($x));                          // same like is_float() , is_double()
$x = 59.85;
var_dump(is_int($x));
echo "<br>";

###########################################################################################################

$a = 5;                   // Integer          // find integer
$b = 5.34;                // Float
$c = "25 kilometers";     // String
$d = "kilometers 25";    // String
$e = "hello";            // String
$f = true;               // Boolean
$g = NULL;              // NULL
echo "<br>";

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;
echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
echo "<br>";

// int(5)                       Answers
// int(5)
// int(25)
// int(0)
// int(0)
// int(1)
// int(0)

###########################################################################################################

//   same like answers float but 5.34 mattum sariyaga print aagum

###########################################################################################################

$a = 5;       // Integer                   // find boolean
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL
echo "<br>";

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;
echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);
echo "<br>";

###########################################################################################################
                              
// bool(true)                            // answer
// bool(true)       
// bool(false)
// bool(true)
// bool(true)
// bool(true)
// bool(false)
// bool(true)
// bool(false)
 
$a = 5;       // Integer                      // find array
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL
echo "<br>";

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;
echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo "<br>";

###########################################################################################################

// stntex =>>    define(name, value);

define("god", "Welcome to W3Schools.com!");               // define
echo god; 
echo "<br>";

const god2="Welcome to W3Schools.com!";                   // const
echo god2;                                                //const - cannot be created inside another block scope   
echo "<br>";                                              // define - can be created inside another block scope
 
define("cars", [ "supra", "BMW","Toyota"]);               // const array
echo cars[2];
echo "<br>"; 

echo(rand(10, 100));                                     // random aaha numbers uruvakkum (rendom passwd)
echo "<br>"; 

###########################################################################################################

// Assignment Operators 

// x += y	   or     x = x + y	Addition	
// x -= y	   or     x = x - y	Subtraction	
// x *= y    or   	x = x * y	Multiplication	
// x /= y	   or     x = x / y	Division	
// x %= y	   or     x = x % y	Modulus

// Comparison Operators

// ==	      Equal         	$x == $y	  
// ===	    Identical	      $x ===  
// !=      	Not equal	      $x != $y	 
// <>	      Not equal      	$x <> $y	  	
// !==	    Not identical	  $x !== $y	 	  
// <=>	    Spaceship	      $x <=> $y

// ++$x	  Pre-increment	       
// $x++	  Post-increment	   
// --$x	  Pre-decrement	     
// $x--  	Post-decrement

?>



</body>
</html>