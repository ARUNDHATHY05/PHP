<html>
 <style>
  input[type="submit"]
  {
    background-color:coral;
    border-radius:20%;
    width:50;
    height:30;
  }
 </style>
   <body>
        <center>
           <form id="form1" method="post" action="program.php">
             <h1 style="color:crimson">
               <u>OLIVE FAMILY MART</u></h1>
                 <table border="1" height="250" cellpadding="5">
                   <tr>
                     <th width="50">QUANTITY</th>
                     </tr>
                       <tr>
                       <td>PEN</td>
                       <td><input type="number" name="item1"></td>
                       </tr>
                         <tr>
                         <td>PENCIL</td>
                         <td><input type="number" name="item2"></td>
                         </tr>
                           <tr>
                           <td>MARKER</td>
                           <td><input type="number" name="item3"></td>
                           </tr>
                             <tr>
                             <td>SCALE</td>
                             <td><input type="number" name="item4"></td>
                             </tr>
                              <tr>
                              <td>BOX</td>
                              <td><input type="number" name="item5"></td>
                              </tr>
                                <tr>
                                <td colspan="2"><center>
                                <input type="submit" name="pay" value="pay">
                                </center>
                                </td>
                                </tr>
                                
                </table>
             </form>
          </center>                                    
   </body>
</html>
