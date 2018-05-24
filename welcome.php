<?php

//variables that will store username and password

$uname = "admin";
$pwd = "admin";

// start session method
session_start();

//if statement that catches user info and displays the welcome page

if(isset($_SESSION['uname'])){
	
	echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
	
	echo "<a href='product.php'>Product</a><br>";
	
	echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}
else{
//verifies that username and password matches and sends them to the welcome page if login matches
	if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
		
		$_SESSION['uname']==$uname;
		
		echo "<script>location.href='welcome.php'</script>";
	}
	else{
//if username or password are incorrect, it will send an alert using javascript and refresh the page until username and password matches. 		
		echo "<script>alert('username or password incorrect!')</script>";
		
		echo"<script>location.href='index.php'</script>";
	}
}
?>