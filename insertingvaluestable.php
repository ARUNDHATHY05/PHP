<?php
 $conn=new mysqli("localhost","root","","BPC");
  
  //check connection
   if($conn->connect_error)
    {
     die("CONNECTION FAILED: ".$conn->connect_error);
    }
     $sql="INSERT INTO STUDENT(ID,NAME) VALUES (1,'JAIDEN')";
      if($conn->query($sql)===TRUE)
       {
         echo "DETAILS ENTERED SUCCESSFULLY";
       }
        else
         {
          echo "ERROR IN INSERTING DETAILS".$sql."<br>".$conn->error;
         }
           $conn->close();
?>
