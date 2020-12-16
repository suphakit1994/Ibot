<html>
<head>
	<!-- Bootstrap Core CSS -->

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>ADMIN PANEL LOGIN</title>
	<script>
		
		$( document ).ready(function() {
			window.location = "pages/index.php?app=home"
		});
		// function error(){
		// 	alert("Can not login. Please check your username and password.");
		// 	document.getElementById("error").innerHTML = "username and password.";
		// }
	</script>
</head>
<style type="text/css">
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}

	li {
		display: inline;
	}
	body{
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		height: 100vh;
	}
	.login-panel {
		position: fixed;
		top: 50%;
		left: 47%;
		margin-top: -300px; 
		margin-left: -135px; 
		background-color: #000; 
		border-radius: 3px; 
		padding: 15px; 
		width: 420px; 
		height: 460px; 
		box-shadow: 7px 7px 16px 0px rgba(50, 50, 50, 0.67);
		opacity: 0.85;
		filter: alpha(opacity=85); /* For IE8 and earlier */
	}

	.myButton {
		background-color:#f9791e;
		border-radius:28px;
		border:1px solid #f9791e;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-size:17px;
		padding:2px 31px;
		text-decoration:none;
	}
	.myButton:hover {
		background-color:#f9791e;
	}
	.myButton:active {
		position:relative;
		top:1px;
	}
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: white;
		font-size: 16px;
	}
	li {
		font-size: 16px;
		float: left;
	}
	li a {
		font-size: 16px;
		display: block;
		color: #c5c5c5;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	li a:hover:not(.active) {
		background-color: white;
	}
</style>

<body>
	<ul style=" border-bottom: 2px solid #c5c5c5;">
		<!-- <li><a href="#home">Home</a></li>
		<li><a href="#news">News</a></li>
		<li><a href="#contact">Contact</a></li> -->
		<li style="float:right"><a class="active" href="register.php">สมัครสมาชิก</a></li>
	</ul>
</div>

</body>
</html>
