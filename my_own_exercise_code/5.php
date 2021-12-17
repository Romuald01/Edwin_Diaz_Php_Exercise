<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

 echo pow(2,9);
 echo "<br>";
 echo rand(1,8080890);
 echo "<br>";
 echo sqrt(100);
 echo "<br>";
 echo ceil(4.7);
 echo "<br>";
 echo floor(1.9);
 echo "<br>";
 echo round(3.9);
 echo "<br>";

//  string functions
echo "string function start here:";
echo "<br>";
$string = "Hellow student, Did you enjoy the class";
echo strlen($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strtolower($string);
echo "<br>";
echo "Array function start here:";
echo "<br>";

$list = [212,233,244,455,678,777,568,9909,$string];

echo max($list);
echo "<br>";
echo min($list);
echo "<br>";
sort($list);
echo "<br>";
print_r($list);

$found = in_array($string, $list);

if($found){
	echo "Woow we did it together";
}else{
	echo "we messed up,We can't find it";
}







?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>