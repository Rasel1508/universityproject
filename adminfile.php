<?php
include("adminlogin.php");
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
  $age = $_POST['Age'];
  $location = $_POST['Location'];
  $contact = $_POST['Contact'];
  $code= $_POST['code'];
  $email = $_POST['emailaddress'];
  $pass = $_POST['psw'];
	if($name == "" || $age == "" || $location == "" || $contact == "" || $pass == "" || $email == "" || $code== "") {
echo "All fields should be filled. Either one or many fields are empty.";}
if ($code == "2020") {
$insert="INSERT INTO admintable(Fullname,Age,Location,Contact_no, Email,AdminCode, Password) VALUES('$name', '$age', '$location', '$contact', '$email', '$code', md5('$pass'))";
if (mysqli_query($mysqli, $insert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($mysqli);
}
}
}
?>