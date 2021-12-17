<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */


function say_something() {
	echo "hello student? Did you like the class? yes okay, great!!!" . "<br>";
}
say_something();

function add() {
$num1 = 4;
$num2 = 10;
$result = $num1 + $num2;
echo $result .'<br>';

}
add();

function expenses($food,$clothing){
	$myExpenses = $food * $clothing;
	return $myExpenses . '<br>';
}
echo expenses(30000,10000);

function init() {
	add();
	say_something();
}
init();

function greetings($message) {
	echo $message;
}
greetings("hello customer,how are you doing?" . '<br>'); 



function addNumbers($number1,$number2) {
	$sum = $number1 + $number2;
	
	return $sum;
}
$resultt = addNumbers(2300,3333);
echo $resultt;
echo "<br>";
$resultt = addNumbers(100000, $resultt);
echo $resultt ."<br>";


$x = "outside"; //global
function convert() {
global $x;
	$x = "inside"; //local scope
}

echo $x;
echo "<br>";
convert();
echo $x;
echo "<br>"; 
echo $x . "<br>";	

// defining of a constant variable
define("name","Degbe Romuald");
echo name;

?>






</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>