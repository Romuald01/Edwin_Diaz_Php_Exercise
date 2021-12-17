<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
include "db.php";


if(isset($_POST['submit'])) {
$matric_number = $_POST['matric'];
$password = $_POST['password'];

$matric_number=  mysqli_real_escape_string($connection, $matric_number);
$password = mysqli_real_escape_string($connection, $password );

$query = "INSERT INTO student(matric,password) VALUES ('$matric_number','$password')";
$result = mysqli_query($connection, $query);
if($result) {
	echo "registered successfully" . '<br>';
}else{
	echo "you are not a student yet" . mysqli_error($connection);

}


}
?>
<?php
$readData = "SELECT * FROM student";
$output = mysqli_query($connection, $readData);
while($row = mysqli_fetch_assoc($output)){
		print_r($row);
}



?>
<!-- update code -->


<form action="create.php" method='post'>
	<input type="text" name="matric" placeholder="enter matric number" style="width:50%;padding:10px">
	<br>
	<br>
	<input type="password" name="password" placeholder="enter password" style="width:50%;padding:10px">
	<br>
	<br>
	<input type="submit" name="submit" value="register" style="width:50%;padding:10px">
</form>
<br>
<br>
<br>




</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
