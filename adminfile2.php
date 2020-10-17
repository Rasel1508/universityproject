<?php
$databaseHost='localhost';
$databaseName='student';
$databaseUsername='root';
$databasePassword='';
$mysqli=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(!$mysqli){
	die("connection failed: " .mysqli_connect_error());
}
else{
echo "connected successfully";}

if(isset($_POST['submit'])) {
	//$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	//
	//$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
	$email=$_POST['emailaddress'];
    $pass=	$_POST['psw'];
	if($email == "" || $pass == "") {
	echo "Either email or password field is empty.";}
		else {
		$result = mysqli_query($mysqli, "SELECT * FROM  admintable WHERE email='$email' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		$row = mysqli_fetch_assoc($result);
		if(is_array($row) && !empty($row)) {
			header('Location: aproject.php');	
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}
		}
}
?>