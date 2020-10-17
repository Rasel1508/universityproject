<?php
include("prologin.php");
$databaseHost = 'localhost';
$databaseName = 'student';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $birth = $_POST['birth'];
   $fathername = $_POST['father'];
    $mothername = $_POST['mother'];
  $location = $_POST['Location'];
  $contact = $_POST['Contact'];
  $email = $_POST['emailaddress'];
  $ssc = $_POST['ssc'];
  $hsc = $_POST['hsc'];
  $department = $_POST['Department'];
  if($name == "" || $birth == "" || $fathername == "" || $mothername == "" || $location == "" || $contact == "" || $email == "" || $ssc == "" || || $hsc == "" || || $department == "") {
echo "All fields should be filled. Either one or many fields are empty.";}
$insert="INSERT INTO applicationlist(Full_name,Date_of_birth,Father_name,Mother_name,Location,Contact_no,Email,SSC_GPA,HSC_GPA,Department) VALUES('$name', '$birth', '$fathername','$mothername', '$location', '$contact', '$email', '$ssc','$hsc','$department',";
if (mysqli_query($mysqli, $insert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($mysqli);
}
}
?>