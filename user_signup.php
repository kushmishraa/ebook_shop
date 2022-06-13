<?php
$con= mysqli_connect('localhost','root','');
if(!$con){
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'ebook_shop')){

	echo 'db not selected';
}

if(isset($_POST['register'])){
    $username= $_POST['username'];
	$email= $_POST['email'];
	$password= $_POST['password'];


	$sql= "INSERT INTO users(username,email,password) VALUES('$username','$email','$password') ";
	if(!mysqli_query($con,$sql)){
	echo '<script>alert("registration incomplete,please try again!")</script>';
}
else{
	echo '<script>alert("Registration Successfull!")</script>';
}
	
	header("refresh:2; url= user_dashboard.php");
}


?>