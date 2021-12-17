
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="form_process.php" method="post">
		<input type="text" name="username" placeholder="Enter Username">
		<br>
		<br>
		<input type="password"  name="password" placeholder="Enter Password">
		<br>
		<br>
		<input type="submit" name="submit">
	</form>
	<br>
	<br>
	<br>
	<?php 

if(isset($_POST['display'])){
echo "<script>alert('welcome to romuald webpage')</script>";
	$data = $_POST["usersname"];
	echo $data;

}
if(isset($_POST['submit'])){
echo "SUBMIT";
}
?>

	<form action="6.php" method="post">
		<input type="text" name="usersname" placeholder="entername">
		<input type="submit" name="display">
		<br>
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
<br>
<br>
<?php 
	$science_data = array("observation","analysis","hypothesis","conclusion","tesing","implementation");

echo "There are  " . strlen($science_data[1]) . " characters in the array" ."<br>";; 
$checking = in_array("implementation",$science_data);
if($checking){
echo "The Word Implementation is in the Array";
} elseif(!$checking){
echo "The word Implementation Cannot be find in the array";
}


?>
</body>
</html>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>