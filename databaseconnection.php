<?php
 //creating a connection
   $j=new mysqli("localhost","root","");
    
    //check connection
      if($j->connect_error)
       {
         die("Connection failed: ".$j->connect_error);
       }
        
        //creating database
         $m="CREATE DATABASE BPC";
          if($j->query($m)===TRUE)
           {
             echo "DATABASE CREATED SUCCESSFULLY";
           }
          else 
           {
             echo "ERROR IN CREATING DATABASE".$j->error;
           }
           
             //closing connection
              $j->close();
?>
