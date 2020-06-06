
<?php

require 'db.php';

session_start();


if(isset($_POST['login'])){

	$user = $_POST['username'];
	$pass = $_POST['password'];
	

	$qu = "select * from users where username = '$user' && password = '$pass'";
	

	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
	
		$_SESSION['username'] = $user;

		header("Location: cp.php");
	} else {
	
		header("Location: inloggen verkerde.php");
	}
	
	
}
?>