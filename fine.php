<?php
include("profile.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libra Books</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>



<div class="row">

<div class="contenntt">
    <h1 class="heading">Check Fine</h1>
    <table class="table">
    <th>Book-ID</th>
    <th>Book-Name</th>
    <th>Due-Date</th>
    <th>No. of Days</th>
    <th>Fine-Amount</th>
    <?php
   


    
     include("connect.php");
     $sql1="SELECT `book_id`,`book_name`,`due_date` FROM `dept_issued_book` WHERE `username`='$_SESSION[id]'";

 
     $co1=mysqli_query($db,$sql1);
         if($co1==TRUE)
     { 
        $Tfine=0;
        $TTfine=0;
   while($row1=mysqli_fetch_assoc($co1))
         {  
            
            $fine=0;
           
             if($row1['due_date'] < date("Y-m-d") )
            {
            $day=0;
             $c=strtotime(date("Y-m-d"));
             $o=strtotime($row1['due_date']);
             $diff=$c-$o;
           
             if($diff>=0)
             {  $day=floor($diff/(60*60*24));
               
                $fine=($day*2);
                $Tfine=$Tfine+$fine;
                
             }
              echo"<tr>";
              echo" <td>";echo$row1['book_id'];echo"</td>";
              echo" <td>";echo$row1['book_name'];echo"</td>";
              echo" <td>";echo$row1['due_date'];echo"</td>";
              echo" <td>";echo $day;echo"</td>";
              echo" <td>";echo$fine;echo"</td>";
              echo"</tr>";
 }
        }
        $TTfine=$TTfine+$Tfine;
        $_SESSION['fine1']=$TTfine;
     } 
        
     $sql2="SELECT `Book-id`,`book-name`,`due_date` FROM `issued_book` WHERE `username`='$_SESSION[id]'";  
     $co2=mysqli_query($db,$sql2);
     
if($co2==TRUE){
  
  $Tfine1=0;
  $TTfine1=0;
         while($row=mysqli_fetch_assoc($co2))
       {  
            
            $fine1=0;
           
             if($row['due_date'] < date("Y-m-d") )
            {
            $day1=0;
             $c1=strtotime(date("Y-m-d"));
             $o1=strtotime($row['due_date']);
             $diff1=$c1-$o1;
           
             if($diff1>=0)
             {  $day1=floor($diff1/(60*60*24));
               
                $fine1=($day1*2);
                $Tfine1=$Tfine1+$fine1;
                
             }
              echo"<tr>";
              echo" <td>";echo$row['Book-id'];echo"</td>";
              echo" <td>";echo$row['book-name'];echo"</td>";
              echo" <td>";echo$row['due_date'];echo"</td>";
              echo" <td>";echo $day1;echo"</td>";
              echo" <td>";echo$fine1;echo"</td>";
              echo"</tr>";
}
        }
        $TTfine1=$TTfine1+$Tfine1;
        $_SESSION['fine2']=$TTfine1;
      
        
        
      }  
     
      $FINE=$_SESSION['fine1']+$_SESSION['fine2'];
      
      $_SESSION['fining']=0;
    $_SESSION['fining1']=$FINE;
    $_SESSION['fining']=$_SESSION['fining']+$_SESSION['fining1'];
    echo"<h3>Total Fine is:"; echo $_SESSION['fining'];echo"</h3>";
  
    ?>
   </table> 
    
    

</div>
</div>
</div>
</div>



</body>
</html>