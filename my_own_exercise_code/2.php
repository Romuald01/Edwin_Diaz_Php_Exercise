<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php
		$number1 = 10;
		$number2 = 20;

		$add = $number1 + $number2;
		echo $add;

		echo 65 + 45;
echo "<br>";
		echo 65 * 45;
		echo "<br>";
		echo 65 / 45;
		echo "<br>";
		echo 65 - 45;
		echo "<br>"; 
		echo  45 + 34 * 45 / 421 - 45;
		echo "<br>"; 
echo "arrays start here";
echo "<br>"; 

$numberList = array(123,321,456,'798',9088,'<h1>Romualdtech and company</h1>');
print_r($numberList);
// echo $numberList[5];
echo "<br>"; 
echo "array_assoc start here";
$regularArray = array(1234,4322,5678,988,7634,'you are humble romuald');
echo '<br>';
$associativeArray = ['first_name'=> 'Romuald','last_name'=>'Adjimagbe'];
// print_r($associativeArray); 

echo $associativeArray['first_name'] . " " . $associativeArray['last_name'];
$lists_assoc = ['number' => 30];
echo "<br>";
echo $lists_assoc['number'];


		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out
		
			 */

	
		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>