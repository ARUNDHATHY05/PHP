<?php 
  if(isset($_POST['pay']))
    {
      $quantity1=$_POST["item1"];
      $total1=5*$quantity1;
      $quantity2=$_POST["item2"];
      $total2=4*$quantity2; 
      $quantity3=$_POST["item3"];
      $total3=20*$quantity3; 
      $quantity4=$_POST["item4"];
      $total4=5*$quantity4; 
      $quantity5=$_POST["item5"];
      $total5=150*$quantity5; 
       $total=$total1+$total2+$total3+$total4+$total5;      
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
         <h1 style="color:crimson">
           <u>OLIVE FAMILY MART</u>
         </h1>  
           <h2 style=""color:"darkred">
             <u>BILL RECEIPT</u>
           </h2><br>
             <table>
              <tr>
                <th>SL NO:</th>
                <th>ITEM</th>
                <th>COST PER</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
              </tr>
                <tr>
                <td>1</td>
                <td>pen</td>
                <td>5/-</td>
                <td><?php echo $quantity1 ?></td>
                <td><?php echo $total1 ?>RS</td>
                </tr>
                  <tr>
                  <td>2</td>
                  <td>pencil</td>
                  <td>4/-</td>
                  <td><?php echo $quantity2 ?></td>
                  <td><?php echo $total2 ?>RS</td>
                  </tr>
                    <tr>
                    <td>3</td>
                    <td>marker</td>
                    <td>20/-</td>
                    <td><?php echo $quantity3 ?></td>
                    <td><?php echo $total3 ?>RS</td>
                    </tr>
                      <tr>
                      <td>4</td>
                      <td>scale</td>
                      <td>5/-</td>
                      <td><?php echo $quantity4 ?></td>
                      <td><?php echo $total4 ?>RS</td>
                      </tr>
                        <tr>
                        <td>5</td>
                        <td>box</td>
                        <td>150/-</td>
                        <td><?php echo $quantity5 ?></td>
                        <td><?php echo $total5 ?>RS</td>
                        </tr>
                          <tr>
                          <th colsp[an="4"><center>TOTAL</center></th>
                          <td><?php echo $total ?>RS</td>
                          </tr>

             </table>
        </form>
     </center>
     </body>
  </html>
  
  
