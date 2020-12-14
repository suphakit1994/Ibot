<?php
	session_start();
	include('config.php');
	$errors = array();
	function register(mysqli$conn,$data=[]){
		$username = mysqli_real_escape_string($conn,$_POST[username]);
		$email = mysqli_real_escape_string($conn,$_POST[email]);
		$password = mysqli_real_escape_string($conn,$_POST[password]);
		$password_2 = mysqli_real_escape_string($conn,$_POST[password2]);
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(empty($email)){
				array_push($errors,"Email is required");
		}
		if(empty($password)){
				array_push($errors,"password is required");
		}
		if ($password != $password_2) {
				array_push($errors,"two password do not match");
		}
		$user_check_query="SELECT* FROM where username='$username' OR email = '$email'";
		$query = mysqli_query($conn, $user_check_query);
		$result = mysqli_fetch_assoc($query);

		if ($result) {
			if($result['username']==$username){
				array_push($errors, "Username already exists");
			}
			if($result['email']==$email){
				array_push($errors, "Email already exists");
			}
			if (count(errors)==0) {
				$password = md5($password);
				$sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
				mysqli_query($conn,$sql);

				$_SESSTION['username']= $username;
				$_SESSTION['success']= "You are now logged in";
				header('location: art/index.php');
			}
		}
}


?>