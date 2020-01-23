
<!DOCTYPE html>
<html>
<head>
	<title>Login-Portal</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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

			<div class="col-sm-4 offset-sm-4 formAlign ">
				<h1 class="text-center">Login</h1>

				<form method="post" action="login.php">

					<label class="control-label" for="name">Username or Email</label> <span class="errors">* <br></span>
					<input type="text" name="name" id="name" class="form-control" required placeholder="Full Name"/>
					<br>
					<label class="control-label" for="password">Password</label> <span class="errors">* </span><br>
					<input type="Password" name="password" class="form-control" id="password" required placeholder="**********" />
					<br>

					<div class="col-sm-4 btnAlign">
		    			<input type="submit" name="login" class="btn btn-primary" value="Login">
		    		</div>
		    		<p class="text-center">
		    			Not a member?<a href="index.php">Sign Up</a>
		    		</p>


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