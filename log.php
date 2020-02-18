<?php
include("menu_login.php")
?>
<!DOCTYPE html>

<html>

<head>
  <title>Libra Books</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
</head>

<body>
  
    
       <div class="logo">
           <img  src="images/icon.png">
       </div>
    <div class="row">

          <div class="contenntt">
              <a class="heading " href="#">Login</a>

              
          </div>
          <form action="#" method="POST">
          <div class="label">
              <p>User ID</p>
              <p><input type="text" class="input"placeholder="Enter your User ID" name="username"required/></p>

          </div>
          <div class="label pass">
              <p>Password</p>
              <p><input type="password" class="input"placeholder="Enter your Password" name="password" required/></p>

          </div>
          <div ><input type="submit" name="submit" class="submit" value="Login" /></div>
           
    </div>
 </form>
 <?php
 
           
        if(isset($_POST['submit'])){
          include("connect.php");
          $row=0;
          $uname=$_POST['username'];
          $password=$_POST['password'];
          $sql = "SELECT * FROM student WHERE username='$uname' && Password='$password'";
          $con=mysqli_query($db,$sql);
          $row=mysqli_num_rows($con);
          
          if($row==0){
                ?>
                <script>
                  alert("The Username And Password Does Not Exist");
                  </script>
                <?php
                }
          else{
             $_SESSION['id']=$_POST['username'];
             header("location:http://192.168.43.142:8080/libra/student/.php");
             ?>
             <!-- <script>
             window.location="menu_login.php";
             </script> -->
             <?php
          }
        }
        ?> 


</body>
</html> 