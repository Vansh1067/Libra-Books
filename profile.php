<?php

include("menu_logout.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libra Books</title>
    <link rel="stylesheet" href="css/pro.css">
</head>
<body>            
 <?php
  if(!(isset($_SESSION['id'])))
{  ?>

    <script>
    alert("Please Login First......");
    window.location="login.php";
 
    </script>
<?php 

}
?>

<div class="side">
        <div class="cont">
            <?php
            
                include("connect.php");
                $uname=$_SESSION['id'];
                $sql = "SELECT * FROM student WHERE username='$uname' ";
                $con=mysqli_query($db,$sql);
                
              $rows=mysqli_fetch_assoc($con);
                $name=$rows['Name'];
               $dept=$rows['Department'];
             
            ?>
            
            <img src="images/login.png">
            <h3 class="user"><?php echo $_SESSION['id']?> </h3>
            <h3 class="user"><?php echo "Name:".$name?> </h3>
            <h3 class="user" style="border-bottom:3px dashed white; padding-bottom:15px;"><?php echo "Branch:".$dept?> </h3>
             <ul style="list-style:none;" >

                <li><a class="fine" href="fine.php">Check Fine<a></li>

                <li><a href="lib.php">Library Books <a></li>
                <li><a href="deptpf.php">Department Books<a></li>
             

            </ul>
           
        </div>
</div>
  
</body>
</html>