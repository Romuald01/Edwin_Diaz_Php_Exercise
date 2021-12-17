<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
if(3 > 10 ){
	echo "three is lesser than ten" . '<br>';
}elseif(4 > 5 ){
	echo "four is lesser than five" . '<br>'; 
}else{
	echo "it is not" . '<br>';
}

if (4 < 2 && 2 > 1) {
	echo "it is true";
}elseif(1 <> 2){
	echo "three is less than 7 but not greater than 7" . '<br>';
}else{
	echo "non of the condition is true";
}

// switch statement
$number = 34;
switch($number) {
		case 34:
		echo "it is 34" . '<br>';
		break;
		case 37:
		echo "it is 34";
		break;
		case 40:
		echo "it is 34";
		break;
		default:
		echo "we can find anything";
		break;
}

for($num = 1; $num <= 10; $num++){
	echo $num . '<br>';
}

$counter = 0;
while($counter <= 10) {
	echo "Romuald Software Engr" . '<br>'; 
	$counter++;
}

// foreach loop
$numbers_Num = array(232,444,556,787,898,9899,999876,998100233);
foreach($numbers_Num as $number ) {
	echo $number . '<br>';

}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


 


?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>