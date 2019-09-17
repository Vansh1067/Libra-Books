<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libra-Books</title>
    <link rel="stylesheet" href="css/menu_login.css">
   
    
</head>
<body>
    <header>
    <div class="menu ">
        <div>
         <img class="icon"src="images/icon.png">
         <div class="cc">

         
          <h1>Libra-Books</h1>
          <p>So many books, so little time... </p>
        </div>
           
              <ul class="menu-bar">
                <li><a id="menu" href="index.php">Home</a></li>
                <li><a id="menu" href="user.php">Books</a></li>
                <li><a id="menu" href="dept.php">Department</a></li>
                <li><a id="menu" href="">Notice</a></li>
                <li><a id="menu" href="">Members</a></li>
              </ul>
           
             <div class="login"> 
                     <?php

                          if(isset($_SESSION['id'])){
                            include("connect.php");
                            $uname=$_SESSION['id'];
                            $sql = "SELECT * FROM student WHERE username='$uname' ";
                            $con=mysqli_query($db,$sql);
                            
                          $rows=mysqli_fetch_assoc($con);
                            $name=$rows['Name'];
                           $dept=$rows['Department'];?>
                        <a href="profile.php"><img id="logo"class="logo"src="images/login2.png"><?php echo$name; ?></a>
                                  <a href="logout.php">Logout</a>
                                  <a href=""><img class="logo"src="images/facebook.png"></a>
                    <a href=""><img class="logo"src="images/twitter.png"></a>
                    <a href=""><img class="logo" src="images/whatsapp.png"></a>
                    <a href=""><img class="logo"src="images/instagram-logo.png"></a>
                    <?php
                          }
                        else{
                            
                              ?>
                    <a href="login.php"><img id="logo"class="logo"src="images/login2.png">Login</a>
                    <a href=""><img class="logo"src="images/facebook.png"></a>
                    <a href=""><img class="logo"src="images/twitter.png"></a>
                    <a href=""><img class="logo" src="images/whatsapp.png"></a>
                    <a href=""><img class="logo"src="images/instagram-logo.png"></a>
                   
                    <?php
                          }

                    ?>
                </div>
         </div>
        
    </div>
    
    
    </header>
</body>
</html>