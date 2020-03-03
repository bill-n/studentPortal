<?php 
	session_start();

	// variable declaration
	$username = "";
	$password = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

     	 $servername = "localhost";	
		 $username_db = "root";
		 $password_db = "";
		 $databasename = "student_portal";

	// connect to database
	$conn = mysqli_connect($servername, $username_db, $password_db);

	$select_db = mysqli_select_db($conn, $databasename);









  //create table in the database
	$create_table = "CREATE TABLE STUDENT_INFO (
						id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						username VARCHAR(30) NOT NULL,
						email VARCHAR(30) NOT NULL,
						password VARCHAR(50),
				
						reg_date TIMESTAMP
							)";
								
  



		

   
  


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
	

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO STUDENT_INFO (username, email, password,telephone) 
					  VALUES('$username', '$email', '$password','$telephone')";
			mysqli_query($conn, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: student_view.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM student_info WHERE username='$username' AND password='$password'";
			$results = mysqli_query($conn, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: student_view.php');
			}else {
				// array_push($errors, "Wrong username or password combination");
			}
		}
	}

?>