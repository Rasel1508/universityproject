<?php
include("prologin.php");
$databaseHost = 'localhost';
$databaseName = 'student';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
  $age = $_POST['Age'];
  $location = $_POST['Location'];
  $contact = $_POST['Contact'];
  $email = $_POST['emailaddress'];
  $pass = $_POST['psw'];
	if($name == "" || $age == "" || $location == "" || $contact == "" || $pass == "" || $email == "") {
echo "All fields should be filled. Either one or many fields are empty.";}
$insert="INSERT INTO usertable(Fullname,Age,Location,Contact_no, Email, Password) VALUES('$name', '$age', '$location', '$contact', '$email', md5('$pass'))";
if (mysqli_query($mysqli, $insert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($mysqli);
}
}
?>