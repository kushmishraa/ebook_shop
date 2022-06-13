
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<title>Sign up</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script>
	function matchPassword() {  
  var password = document.getElementById("pass1");  
  var confirm_password = document.getElementById("pass2");  
  if(pass1 != pass2)  
  {   
    alert("Passwords did not match");
	$('#submit-button').prop('disabled', true);  
	
  } else {  
    alert("Password created successfully");
	$('#submit-button').prop('disabled', false);  
  }  
}  
</script>
<style>
	body{
		color: #fff;
		background: #f5f5f5;
		font-family: 'Montserrat', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 390px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
                                    
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #f4511e;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		
        background: #f4511e;
        color: white;
	}
	.signup-form a {
		color: #f4511e;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #646464;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	
.login_link_text{
    color:#646464;
}
</style>
</head>
<body>
    
<div class="signup-form">
    <form action="user_signup.php" method="post">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="username" placeholder="Username" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" id="pass1" placeholder="Password" required="required" maxlength="8">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					
				</span>
				<input type="password" class="form-control" name="confirm_password" id="pass2" placeholder="Confirm Password" required="required" maxlength="8">
			</div>
        </div>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
         <center><button type="submit" class="btn btn-primary btn-lg" value="register" name="register" id="submit-button" onclick="matchPassword()">Sign Up</center></button>
        </div>
    </form>

	<div class="text-center login_link_text">Already have an account? <a href="userLogin.php">Login here</a></div

</div>

</body>
</html>
