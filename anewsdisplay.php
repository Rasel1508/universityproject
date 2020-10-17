<?php
    $con = new mysqli("localhost","root","","student");   /* Connection code(Connect with database) */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Data</title>
    <style>
        body{
            margin: 10% auto 0;font-size: 30px
        }
        td{
            text-align: center;
        }
        *{
            box-sizing: border-box;
        }
        .column{
            float:left;
            width:33.33%;
            padding:5px;
        }
        .row::after{
            content:"";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
<?php
echo "<a href='notice.php'>addproduct</a> | <a href='anewsdisplay.php'>view product</a>";
?>
    <center><h1>News & Update</h1></center>
    <table>
        <?php
    /* Fetch data from databse(select query) */
            $res = $con->query("select * from notice") or die(mysqli_error($con));
            while($row = mysqli_fetch_array($res))
            {
        ?>
        <div class="row";>
        <div class="column">
                 <img src="images/<?php echo $row["Picture"]; ?>" height="250" width="350" alt="User image"><br>
            <?php echo $row["Headline"]; ?><br>
            <?php echo $row["Desription"]; ?><br>
            <a href="notice.php?isEdit=<?php echo $row["Headline"]; ?>">Edit</a> | <a href="?delete=<?php echo $row["Headline"]; ?>">Delete</a>
        </div>
        <?php
            }
        ?>
    </table>
<?php
    /* Delete code.Wehen click on delete link this will perform.!*/
        if(isset($_REQUEST["delete"]))
        {$query2="select Picture from notice where Headline='".$_REQUEST["delete"]."'";
            $result=mysqli_query($con,$query2) or die(mysqli_error($con));
            while($row1=mysqli_fetch_array($result))
            {
                $image1=$row1["Picture"];
            }
            unlink("images//".$image1);
            $query3="delete from notice where Headline='".$_REQUEST["delete"]."'";
            mysqli_query($con,$query3) or die(mysqli_error($con));
            echo "<script>alert('Data deleted successfully..!');window.location='anewsdisplay.php';</script>";   
        }
    ?>.
</body>
</html>