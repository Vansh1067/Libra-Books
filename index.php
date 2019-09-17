<?php
  include("menu_login.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/galleryy.css">
    
    <title>Libra books</title>
</head>
<body> <header>
     
            
        </div>  <div class="gallery">
          
            </div>
            <form method="post" name="" action="">
                    <div id="form">
                    <input type="text" placeholder="User ID" name="username" class="form"/> <br>
                    <input type="password" class="form" placeholder="Password" name="password"/><br>
                    <input type="submit" name="submit" class="form1" value="Login">
                    </div>
                </form>
        
        
        </header>
        <section class="content">
    
      <div class="cont">
         <img src="images/lib2.jpg">
            <p class="head"> Central Library</p>
                <h3 class="head1">Govind Ballabh Pant Institute of Engineering and Technology</h3>
                <p class="sub-content">Pride of the institute is large volumes (30000) of books in the areas of Engineering, Applied sciences, Humanity and Management, and ancillary areas from various Indian and foreign publications. Library is a hub around which all academic activities of the institute revolve. The library subscribes to national and international journals, including e-journals through consortium in the field of technology, magazines on current affairs and general interest to keep the students update with new technology & events. The students have free in-hand facilities for books and journals.</P>
                </div>
        
        <div class="access">
                    
                <h1 class="head2">Best Place to</h1>
                  <div class="grid">
                    <p class="count">01</p>
                    <a href="lib_book.php">Check availabel books in library</a>
                  </div>
                  <div class="grid">
                    <p class="count">02</p>
                    <a href="profile.php">Check your due dates</a>
                  </div>
                  <div class="grid">
                    <p class="count">03</p>
                    <a href="fine.php"id="fine">Check fine</a>
                  </div>
                  
        </div>
        <div class="reserve">
                <a href="http://www.google.com">Reserve my spot</a>
         </div>
        <div class="slide-show">
        <div class="w3-content w3-section" style="width: 500px;">
		<img class="mySlides" src="images/bt.jpg" style="">
		<img class="mySlides" src="images/cs.jpg" style="">
		<img class="mySlides" src="images/ee.jpg" style="">
		<img class="mySlides" src="images/ce.jpg" style="">
	</div>

<script type="text/javascript">
	var a=0;
	carousel();

	function carousel()
	{
		var i;
		var x= document.getElementsByClassName("mySlides");

		for(i=0; i<x.length; i++)
		{
			x[i].style.display="none";
		}

		a++;  
		if(a > x.length) {a = 1}
			x[a-1].style.display = "block";
			setTimeout(carousel, 5000);
	}
</script>
  
                 </div>
       <div class="copy">
                  <p>&copy Copyright 2019</p>
        </div> 

        </section>
        <?php
        include("connect.php");
        if(isset($_POST['submit'])){
        
          $row=0;
          $uname=$_POST['username'];
          $password=$_POST['password'];
          $sql = "SELECT * FROM student WHERE username='$uname' && Password='$password'";
          $con=mysqli_query($db,$sql);
          $row=mysqli_num_rows($con);
          
          if($row==0){
                ?>
                <script>
                  alert("The Username And Password Does not Exist");
                  </script>
                <?php
                }
          else{
            
             $_SESSION['id']=$uname;
            
              ?>
             <script>
               window.location="index.php";
               </script>
             <?php
          }
          

        }
      ?>
</body>
</html>