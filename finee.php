<?php

          if(isset($_SESSION['id']))
              { 
echo"<h3 style='position:fixed;z-index:15; top:50px; font-size:25px;color:red; '>";echo"Total Fine is:";echo$_SESSION['fine'];echo"</h3>";
}?>