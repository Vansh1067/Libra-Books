<?php

  include("menu_logout.php");
  if(!(isset($_SESSION['id']))){
      ?>
      <script>
          alert("please login first....!");
          window.location="login.php"
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
    <title>Libra books</title>
    <link rel="stylesheet" href="css/side.css">
</head>
<body>
<section>    
    <div class="side">
        
    </div>
    <div class="heading">
        <h1>Select Books From List</h1>
    </div>
    <div >
    <form action="" method="post">
        <input type="text" class="search-box" name="srch" placeholder="Search Books..." required>
        <input class="search" type="submit" value="" name="search" >
    </form>
    </div>
     </section>
</body>
</html>