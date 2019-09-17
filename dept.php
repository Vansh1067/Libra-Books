<?php

include("menu_logout.php");
if(!(isset($_SESSION['id']))){?>
<script>
alert("Please Login First........");
window.location="login.php";
</script>
   
  <?php  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libra-Books</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/dept.css">
</head>
<body>
   
    <section>
       
        <div class="dept">
            <h1 class="heading">Select Your Department</h1>
            <p >Mechanical Engieering ></p>
           <a href="mech.php"> <img class="img-dept" src="images/me.jpg"></a>
           <p >Computer Science Engineering></p>
           <a href="cs.php"><img src="images/cs.jpg" class="img-dept" ></a>
           <p >Electronics and communication ></p>
           <a href="ece.php">  <img src="images/ece.jpg" class="img-dept" ></a>
           <p >Electrical Engieering ></p>
           <a href="ee.php"> <img src="images/ee.jpg" class="img-dept"  ></a>
           <p >Civil Engieering ></p>
           <a href="ce.php"> <img src="images/ce.jpg" class="img-dept" ></a>
           <p >Biotechnology Engieering ></p>
           <a href="bt.php"><img src="images/bt.jpg" class="img-dept" ></a>
        </div>

    </section>
</body>
</html>