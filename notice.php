<?php
    $con = new mysqli("localhost","root","","student");   /* Connection code(Connect with database) */
    echo "<a href='notice.php'>add</a> | <a href='unewsdisplay.php'>view</a>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registartion</title>
    <style>
        input[type=text],input[type=email],input[type=password]{
            width:100% !important;
        }
        table{
            border: 1px solid rgb(202,207,210);
        }
        form {
            margin: 10% auto 0;
        }
    </style>
</head>
<body>
<?php
   /* Start Update Code */
      if(isset($_REQUEST["btnupdate"]))   /* Update button click event.. */
      {
             
            $data = mysqli_query($con,"update notice set Headline='".$_REQUEST["txtfname"]."',Picture='".$image."',Desription='".$_REQUEST["txtfdes"]."' where id='".$_REQUEST["txtid"]."'");
            if($data == TRUE)
            {
                echo "<script>alert('Data updated successfully..!');window.location='newsdisplay.php';</script>";   
            }
            else
            {
                echo "<script>alert('Error while updating..!!')</script>";
            }
        }
  
        if(isset($_REQUEST["btncancel"]))   /* Cancel button click event.. */
        {
            echo "<script>window.location='newsdisplay.php';</script>";   
        }
    /* End update code */
   ?>
    <?php
        /* Click on edit from display page check variable that you send from that page and fetch data of that variable. */
    if(isset($_REQUEST["isEdit"]))
        {
            $rs = mysqli_query($con,"select * from notice where id='".$_REQUEST["isEdit"]."'") or die(mysqli_error($con));
            while($row = mysqli_fetch_array($rs))
            {
                /*$ch1 = $ch2 = $ch3 = "";
          $myArray = explode(',', $row["RegHobbies"]);
          foreach($myArray as $chk)
          {
            if($chk == "Cricket")
               {
              $ch1 = 'checked';
               }  
            if($chk == "Hocky")
               {
              $ch2 = 'checked';
               }
            if($chk == "Singing")
               {
              $ch3 = 'checked';
               }                    
         }*/
    ?>
        <form method="post" enctype="multipart/form-data">
      
          <input type="hidden" name="txtid" value="<?php echo $row["id"]; ?>">
           <center><h1>Update Product Information</h1></center>
            <table align="center" border="0">
                <tr>
                <td>Headline:</td>
                <td><input type="text" name="txtfname" value="<?php echo $row["Headline"]; ?>"></td>
            </tr>
            <tr>
                <td>Picture:</td>
                <td><input type="file" name="Picture" value="<?php echo $row["Picture"]; ?>"></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><input type="text" name="txtfdes" value="<?php echo $row["Desription"]; ?>"></td>

            </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Update" name="btnupdate"> <input type="submit" value="Cancel" name="btncancel"></td>
                </tr>
            </table>
        </form>
    <?php
            }
        }
        else
        {
    ?>
    <form method="post" enctype="multipart/form-data">
       <center><h1>Information</h1></center>
        <table align="center" border="0">
            <tr>
                <td>Headline:</td>
                <td><input type="text" name="txtfname"></td>
            </tr>
            <tr>
                <td>Picture:</td>
                <td><input type="file" name="Picture"></td>
            </tr>  
              <tr>
                <td>Description:<br /><br /><br /></td>
              <td><textarea name="Address" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Insert" name="btninsert"></td>
            </tr>
        </table>
    </form>
    <?php 
    } 
    ?>
    <?php
    /* Insert Code Start */
        if(isset($_POST["btninsert"]))   /* Insert button click event */
        {
        /* Move image into images folder which you have to create in C:\xampp\htdocs\foldername\ */
            move_uploaded_file($_FILES["Picture"]["name"],"images/".$_FILES["Picture"]["name"]); 
            $image1=$_FILES["Picture"]["name"];
            echo($image1);
        $image=$_FILES["Picture"]["name"];
        echo($image);
       //$checkbox1=$_POST['chkhobby'];  
        //$chk="";  
        //foreach($checkbox1 as $chk1)  
          //{  
         //if($chk == "")
            //{
               //$chk .= $chk1;
            //}
         //else{
             //  $chk .= ",".$chk1;  
             //}  
          //}  
          $query1="insert into notice (Headline,Picture,Desription) values('".$_POST["txtfname"]."','".$image."','".$_POST["txtfdes"]."')";
            $res = mysqli_query($con,$query1) or die(mysqli_error($con));
            if($res == TRUE)
            {
                echo "<script>alert('Data added successfully..!!')</script>";
            }
            else
            {
                echo "<script>alert('Something getting wrong.Please try again..!')</script>";
            }
        }
    /* Insert Code End */
    ?>
</body>
</html>