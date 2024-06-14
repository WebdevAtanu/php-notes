<?php
$alert=false;//it will holding the alert message
$error=false;//it will holding the alert message
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include "components/connection.php";
$username=$_POST["user"];
$password=$_POST["password"];
$sqlquery="INSERT INTO `logindata` (`username`, `password`, `time`) VALUES ('$username', '$password', current_timestamp())";
$result=mysqli_query($conn,$sqlquery);
if(!$result){
$error=true;
}
else{
$alert=true;
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Signup</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<style>
			body{
				background: url("images/supes.jpeg");
				background-size: 100%;
				background-attachment: fixed;
			}
			.container{
		padding: 20px;
		backdrop-filter: brightness(0.3);
		color: white;
		}
		</style>
	</head>
	<body>
		<?php require"components/navbar.php"?>
		<?php
		if($alert){
			echo'
		<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Success!</strong> Your account is saved. You can login now.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>';};
		?>
		<?php
		if($error){
		echo'
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Sorry!</strong> The username is already taken. Try again with different username.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>';};
		?>
		<div class="container my-5" style="width:30vw;">
			<h1 class="text-center">Signup</h1>
			<form action="signup.php" method="post">
				<div class="mb-3">
					<label for="user" class="form-label">Username</label>
					<input type="text" class="form-control" id="user" placeholder="Enter Username" name="user" required>
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
				</div>
				<button type="submit" class="btn btn-primary" style="width:100%;">Signup</button>
			</form>
		</div>
		
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>