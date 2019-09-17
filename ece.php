<?php

  
  /* if(!(isset($_SESSION['id']))){
      ?>
      <script>
          alert("please login first....!");
          window.location="login.php"
          </script>
     <?php

      
  } */
  include("user.php");

  
 
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
<div class="table"> 
   <?php 
                    
                    
                    echo "<table>"; 

                             
                                
                                echo "<th>" ;echo"Book-ID" ;echo"</th>";
                                echo "<th>" ;echo"Book-Name" ;echo"</th>";
                                echo "<th>" ;echo"Author" ;echo"</th>";
                                echo "<th>" ;echo"Publication" ;echo"</th>";
                                echo "<th>" ;echo"Edition" ;echo"</th>";
                                echo "<th>" ;echo"Availabel" ;echo"</th>";
                              
                    
                  
                                if(isset($_POST['search']))
                                {   
                
               include("connect.php");
                    
                      $search=$_POST['srch'];
                      $sq="SELECT * FROM `books` WHERE `dept`='ece' AND ( Books LIKE '%$search%' OR author LIKE '%$search%' OR publication LIKE '%$search%')";
                      $co=mysqli_query($db,$sq);
                      
                        if($co==TRUE){
                        while($row=@mysqli_fetch_assoc($co)){
                            echo "<tr>";
                            echo "<td>" ;echo$row['Book-id'] ;echo"</td>";
                            echo "<td>" ;echo$row['Books'] ;echo"</td>";
                            echo "<td>" ;echo$row['author'] ;echo"</td>";
                            echo "<td>" ;echo$row['publication'];echo"</td>";
                            echo "<td>" ;echo$row['edition'] ;echo"</td>";
                            echo "<td>" ;echo$row['availabel'] ;echo"</td>";
                            echo "</tr>";
                         }
                       }
                    else{
                        echo "No Book Found!s";
                    }
                    echo "</table>";
                
                }
             else{
                

                    include("connect.php");
                    $sql="SELECT * FROM `books` WHERE `dept`='ece'";
                    $con=@mysqli_query($db,$sql);
                       if($con==TRUE){
                           while($row=@mysqli_fetch_assoc($con)){
                               echo "<tr>";
                               echo "<td>" ;echo$row['Book-id'] ;echo"</td>";
                               echo "<td>" ;echo$row['Books'] ;echo"</td>";
                               echo "<td>" ;echo$row['author'] ;echo"</td>";
                               echo "<td>" ;echo$row['publication'];echo"</td>";
                               echo "<td>" ;echo$row['edition'] ;echo"</td>";
                               echo "<td>" ;echo$row['availabel'] ;echo"</td>";

                              
                               echo "</tr>";
                            }
                            
                          }
                       else{
                           echo "Error";
                       }
                       echo "</table>";
                    }

        ?>
      
       </section>
</body>
</html>