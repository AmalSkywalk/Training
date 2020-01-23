<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>

<title>LoginForm</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src=" https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
</head>
<body>



<div class="header">
	<div class="container">
	LogIn Proj
	</div>
</div>
<div class="formspace">
	<div class="container">
		
		<div class="row">
	
			<div class="col-sm-4  offset-sm-4 formAlign ">
			<h1 class="text-center">Register</h1>
				<i style="color: grey;"> Please fill the form.</i>

				<form name="registration" method="post" action="index.php">
				<div class="form-group">
					<label class="control-label" for="name">Username</label> <span class="errors">* <br></span>
					<input type="text" name="name" id="name" class="form-control"  placeholder="Full Name" value="<?php echo $username; ?>" />
				</div>

				<div class="form-group">
					<label class="control-label" for="email">Email</label> <span class="errors">*<br></span>
					<input type="Email" name="email" class="form-control" id="email"  placeholder="example@mail.com" value="<?php echo $email; ?>" />
				</div>

				<div class="form-group">
					<label class="control-label" for="password">Password</label> <span class="errors">* </span><br>
					<input type="Password" name="password_1" class="form-control" id="password_1"  placeholder="**********" />
				</div>

				<div class="form-group">
					<label class="control-label" for="password">Confirm Password</label> <span class="errors">* </span><br>
					<input type="Password" name="password_2" class="form-control" id="password_2"  placeholder="**********" />
				</div>

				<div class="form-group">
					<label class="control-label" for="gender" >Gender</label> <span class="errors">* </span><br/> 
					<input type="radio" name="gender" value="female"  />  Female
					<input type="radio" name="gender" value="male"  />  Male
					<input type="radio" name="gender" value="other" />  Other
					
					
				</div>

				<div class="form-group">
					<label class="control-label" for="country">Country</label><br/>
					<select id="country" class="form-control" name="country" >
	      				<option value="australia">Australia</option> 
	      				<option value="canada">Canada</option>
	      				<option value="usa">USA</option>
      					<option value="australia">India</option>
      					<option value="canada">China</option>
      					<option value="usa">Nepal</option>
	    			</select>
	    		</div>

	    		<div class="col-sm-4 btnAlign">
	    			<input type="submit" name="submit" class="btn btn-primary" value="Submit">
	    		</div>
	    		<p class="text-center">
	    			Already a member?<a href="login.php">Sign in</a>
	    		</p>
				
				<script src="validation.js"></script>

				</form>
			</div>
			
		</div>
	</div>
	
</div>
<div class="End">
	<div class="container">
		@End!
	</div>
	
</div>

</body>
</html>
