<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="body.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<section class="image">

		 <form class="reg-box border-warning" action="abcd2.php" method="post">
 
			<h3 class="text-capitalize text-center text-white p-md-4">User Login</h3>
			<div class="w-50 m-auto">
  
  <div class="form-group">
    <input type="email" name="emailaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
</div>
  <div class="form-group">
  	<input type="password" class="form-control" id="psw" name="psw" placeholder="Enter Password" title="You Enter a Wrong Password" required>
  </div>
<div>
   <input type="submit" name="submit" class="btn btn-success" value="Login">
</div>
    <p class="text-warning pt-4">
      Don't have a Account: <a class="box text-white" href="proRegistration.php">SIGN UP</a>
    </p>
</form>
</div>
</form>
</section>
<?php
include("connection.php");
if(isset($_POST['submit'])) {
	//$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	//
	//$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
	$email=$_POST['emailaddress'];
    $pass=	$_POST['psw'];
	if($email == "" || $pass == "") {
	echo "Either username or password field is empty.";}
		else {
		$result = mysqli_query($mysqli, "SELECT * FROM UserTable WHERE emailaddress='$email' AND password=md5('$pass')")
					or die("Could not execute the select query.");		
		$row = mysqli_fetch_assoc($result);
		if(is_array($row) && !empty($row)) {
			header('Location: project.html');	
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}
		}
}
?>
</body>
</html>
