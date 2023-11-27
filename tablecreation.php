<?php
 
 //checking connection
  $conn=new mysqli("localhost","root","","BPC");
  
   //check connection
    if($conn->connect_error)
     {
       die("Connection failed: ".$conn->connect_error);
     }
       //sql code to create table
        $j="CREATE TABLE STUDENT(ID INT(2) PRIMARY KEY,NAME VARCHAR(30) NOT NULL)";
         if($conn->query($j)===TRUE)
          {
           echo "TABLE CREATED SUCCESSFULLY";
          }
            else
             { 
               echo "ERROR IN CREATING TABLE".$conn->error;
             }
               
                $conn->close();
?>
