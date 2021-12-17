
	<?php  

/*  Step1: Make a form that submits one value to POST super global

 */

if(isset($_POST['submit'])) {
	$names = array("Agorsu","james","Akindele","Ayomide","Romuald","Rose","Isaiah");

	$username = $_POST['username'];
	$password = $_POST['password'];
	echo "Hello your username is " . $username . " and your password is " . $password;

	if(strlen($username) > 10 ){
		echo "<br>" . "username cannot be longer ten";
	}elseif(strlen($username) < 5 ){
		echo "<br>" . "username has to be more than five";
	}
	if(!in_array($username, $names)){
		echo ", Sorry,You are not allowed to login";
	}else{
		echo "You are welcome ". $username;
	}

}



	
?>