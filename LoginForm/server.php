<?php 

		session_start();

	$username="";
	$email="";
	$gender="";
	$errors = array();
	//connect to DB
	$db = mysqli_connect('localhost', 'root', '','loginform');

	//if the register button is clicked
	if (isset($_POST['submit'])) {
		$username = $_POST['name'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];

		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$errors['email']="Invalid email";
		}
		
		$emailQuery="SELECT * FROM users WHERE email=? LIMIT 1";
		$stmt = $db->prepare($emailQuery);
		$stmt->bind_param('s',$email);
		$stmt->execute();
		$result= $stmt->get_result();
		$userCount=$result->num_rows;

		if ($userCount>0) {
		
				$errors['email']="Email already exists!";
		}

		if(count($errors)===0){

			$password= md5($password_1);			//encryption
			$sql = "INSERT INTO users(username, email, password, gender, country)
						VALUES ('$username', '$email', '$password', '$gender', '$country')";
			if(mysqli_query($db, $sql)){

					$user_id = $db->insert_id;
					$_SESSION['id'] = $user_id;
					$_SESSION['username'] = $username;
					$_SESSION['email'] = $email;
					
					$_SESSION['message']="You are now logged in!";
					$_SESSION['alert-class'] = "alert-success";
					header('location: home.php');
					exit();
			}



		}
	}

 ?>