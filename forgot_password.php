<?php
session_start();

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"ebook_shop");
if(isset($_REQUEST["submit"])){

  $username=$_REQUEST["username"];
  $_SESSION['username']=$username;
  $email=$_REQUEST["email"];
  $query=mysqli_query($link,"select * from users where username='$username' && email='$email'");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true){

    echo '<script>alert("update password next")</script>';
    header("refresh:1; url=update_password.php");
}
else{
       echo '<script>alert("invalid credentials!")</script>';
}

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset Password</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #999;
		background: #f5f5f5;
		font-family: 'Montserat', sans-serif;
	}
	.form-control {
		box-shadow: none;
		border-color: #ddd;
	}
	.form-control:focus {
		border-color: #4aba70; 
	}
	.login-form {
        width: 350px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .login-form form {
        color: #434343;
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
	}
	.login-form h4 {
		text-align: center;
		font-size: 22px;
        margin-bottom: 20px;
	}
    .login-form .avatar {
        color: #fff;
		margin: 0 auto 30px;
        text-align: center;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		z-index: 9;
		background: #f4511e;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
    .login-form .avatar i {
        font-size: 62px;
    }
    .login-form .form-group {
        margin-bottom: 20px;
    }
	.login-form .form-control, .login-form .btn {
		min-height: 40px;
		border-radius: 2px; 
        transition: all 0.5s;
	}
	.login-form .close {
        position: absolute;
		top: 15px;
		right: 15px;
	}
	.login-form .btn {
		background: #f4511e;
		border: none;
		line-height: normal;
	}
	.login-form .btn:hover, .login-form .btn:focus {
		background: #f4511e;
        color: white;
	}
    .login-form .checkbox-inline {
        float: left;
    }
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .forgot-link {
        float: right;
    }
    .login-form .small {
        font-size: 13px;
    }
    .login-form a {
        color: #646464;
    }
</style>
</head>
<body>
<div class="login-form">    
    <form action="forgot_password.php" method="post">
		<div class="avatar"><i class="material-icons">&#9993;</i></div>
    	<h4 class="modal-title">Reset Password</h4>
        <div class="form-group">
            <input type="text" name="username"  class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="text" name="email"  class="form-control" placeholder="Enter valid E-mail" required="required">
        </div>
       
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="SUBMIT" name="submit">              
    </form>			
    <div class="text-center small">Don't have an account? <a href="signUp.php">Sign up</a></div>
</div>
</body>
</html>                                		