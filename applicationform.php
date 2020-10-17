<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <section class="image">
    <form class="reg-box border-warning" action="applicanttable.php" method="post">
      <h1 class="text-capitalize text-center text-black p-lg-4">Apply Online</h1>
      <div class="w-75 m-auto">
  <div class="form-group ">
    <input type="name" class="form-control" name="name" placeholder="Enter Your Full name">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="birth" placeholder="Date of Birth">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="father_name" placeholder="Father name">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="mother_name" placeholder="Mother name">
  </div>
   <div class="form-group ">
    <input type="name" class="form-control" name="contact" placeholder="Contact">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="address" placeholder="Address">
  </div>
  <div class="form-group">
    <input type="email" name="emailaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
</div>
<div class="form-group">
    <input type="name" name="ssc_gpa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SSC GPA - Year [Example: 4.13 - 2017]">
</div>
<div class="form-group">
    <input type="name" name="hsc_gpa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HSC GPA - Year [Example: 4.00 - 2019]">
</div>
<label for="cars">Department</label>
<select id="cars">
  <option value="volvo">CSE - Computer Science and Engineering</option>
  <option value="saab">EEE - Electrical & Electronic Engineering</option>
  <option value="vw">ARCH - Architecture</option>
   <option value="vw">DELL - English Language & Literature</option>
    <option value="vw">DLAW - LAW</option>
     <option value="vw">DECHO - Economics</option>
     <option value="vw">DMATH - Mathematics</option>
  <option value="audi">FBS - Faculty of Business Studies</option>
</select>
<label for="cars">Session</label>
<select id="cars">
  <option value="volvo">Spring</option>
  <option value="saab">Winter</option>
</select>
<div>
<label for="cars"><br>Payment Sytem</br></label>
<select id="cars">
  <option value="volvo">Bkash 01877777777</option>
</select>
</div>
<div class="form-group">
    <input type="name" name="paymentnumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Payment System Baksh Transactions Details">
</div>
<div>
   <input type="submit" name="submit" class="btn btn-success" value="Submit">
</div>
<p class="text-warning pt-4">
      Helpline: <a class="text-black" href="ucontactshow.php">Contact</a>
    </p>
</form>
</div>
</form>
</body>
</html>