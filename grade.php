<html> 
 <head>
  <title>GHSS KADAYIRUPP</title>
 </head>
   <body style="background-color:#B0E0E6">
     <center>
      <br>
      <br>
      <br>
       <h1 style="color:#A52A2A"><u>GHSS KADAYIRUPP</u></h1>
        <br>
        <br>
          <h2 style="color:#A52A2A"><i>GRADE CARD</i></h2>
            <form id="form" method="post">
              <table border="4" bgcolor="#90EE90" bordercolor="#4682B4">
                <tr>
                  <th>NAME</th>
                  <td><input type="name" name="name1" id="name1"></td>
                </tr>
                  <tr>
                  <th>ROLL NUMBER</th>
                  <td><input type="roll" name="roll1" id="roll1"></td>
                  </tr>
                    <tr>
                      <th colspan="2" align="center">MARKS</th>
                    </tr>
                      <tr>
                       <th>MATHS</th>
                       <td><input type="text" name="mark1" id="mark1"></td>
                      </tr>       
                        <tr>
                       <th>CHEMISTRY</th>
                       <td><input type="text" name="mark2" id="mark2"></td>
                      </tr> 
                       <tr>
                       <th>PHYSICS</th>
                       <td><input type="text" name="mark3" id="mark3"></td>
                      </tr>  
                         <tr>
                                <td colspan="2"><center>
                                <input type="submit" name="SUMBIT" value="SUMBIT">
                                </center>
                                </td>
                                </tr>        
              </table>
            </form>
     </center>
   </body>
</html>
    <?php
      if(isset($_POST['SUMBIT']))
       {
        $name=$_POST['name1'];
        $roll=$_POST['roll1'];
        $m1=$_POST['mark1'];
        $m2=$_POST['mark2'];
        $m3=$_POST['mark3'];
        $total1=NULL;
        $avg=NULL;
        $percentage=NULL;
        $total1=$m1+$m2+$m3;
        $avg=$total1/3.0;
        $percentage=($avg/300.0)*3;
       }
    ?>
    <html>
      <style>
     td{
     text-align:center;
       }
   </style> 
     <body>
     <center><br><br>
        <form id="form2">
          <table border="4">
           <tr>
            <th>SL NO:</th>
            <th>NAME</th>
            <th>ROLL NUMBER</th>
            <th>MATHS</th>
            <th>CHEMISTRY</th>
            <th>PHYSICS</th>
            <th>TOTAL</th>
            <th>GRADE</th>
           </tr>
             <tr>
                <td>1</td>
                <td>JAIDEN BOSE</td>
                <td><?php echo $roll ?></td>
                <td><?php echo $m1 ?></td>
                <td><?php echo $m2 ?></td>
                <td><?php echo $m3 ?></td>
                <td><?php echo $total ?></td>
                <td><?php echo $grade ?></td>
                </tr>
     </center>
    </body>
