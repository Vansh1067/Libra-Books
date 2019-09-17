<?php
include("profile.php");
if(!(isset($_SESSION['id'])))
{
    header("login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libra Books</title>
</head>
<body>
<link rel="stylesheet" href="css/profile.css">
<div class="row">
<?php
if(isset($_SESSION['id']))
{
        ?>
        <div class="contenntt">
    <a class="heading " href="#">Library Books</a>
    <table class="table">
    <th>Book-ID</th>
    <th>Book-Name</th>
   
    <th>Date-Issued</th>
    <th>Due Date</th>
    <?php
    
        include("connect.php");
        $sql="SELECT * FROM `issued_book` WHERE username='$_SESSION[id]' ";
        $co=mysqli_query($db,$sql);
        
        if($co==TRUE){
                while($row=mysqli_fetch_assoc($co))
                {
                        $d=date("Y-m-d");
               
                echo "<tr>";
                        echo"<td>"; echo$row['Book-id'] ;echo"</td>";
                        echo"<td>"; echo$row['book-name'] ;echo"</td>";
                        echo"<td>"; echo$row['issued_date'] ;echo"</td>";
                       
                        if($d > $row['due_date']){
                                echo"<td>"; echo$row['due_date'] ; echo"<br>";
                                echo"<form action='' method='post'>";
                                         echo"<input class='reissue' name='submit2' type='submit' value='Reissued'>";
                                         echo"<input  name='reissue1' type='hidden' value='";echo $row['Book-id'];echo"'>";  
                                echo"</form>";
                                
                        echo"</td>"; 
                               }

                         else{
                                echo"<td>"; echo$row['due_date'] ;echo"</td>";    
                                
                                    
                                }
                        echo"</tr>";
                }
        }
        if(isset($_POST['submit2']))
{ 
        
         $book_id=$_POST['reissue1'];
        
        include("connect.php");
     
     $sq="UPDATE `issued_book`
     SET `issued_date`=CURDATE(),`due_date`= ADDDATE(`issued_date`, INTERVAL 15 DAY)
     WHERE `username`='$_SESSION[id]' AND `Book-id`='$book_id';";
     $coo=mysqli_query($db,$sq);

    ?>
    <script>
        alert("The Book is Issued ");
window.location="lib.php";
        </script>
<?php
}
  

        ?>
        </table>
        </div>
        <?php

}
else{?>
        <div class="contenntt">
        <a class="heading " href="#">Library Books</a> 
           <h1>No Book Will be Issued!<h1>   
        </div>  
        <?php
}
?>





</div>
</body>
</html>