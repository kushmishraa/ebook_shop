<?php

$con= mysqli_connect('localhost','root','');
if(!$con){
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'ebook_shop')){

	echo 'db not selected';
}

$contact_name=$_POST['con_name'];
$contact_email=$_POST['con_email'];
$contact_query=$_POST['con_query'];


$sql= "INSERT INTO contact(con_name,con_email,con_query) VALUES ('$contact_name','$contact_email','$contact_query')";

if(!mysqli_query($con,$sql)){
	echo 'not inserted';
}
else{
	echo '<script>alert("your response has been registered, Thank you.")</script>';
}





?>