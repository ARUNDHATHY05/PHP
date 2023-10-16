<html>
 <head>
   <title>FORM</title>
 </head> 
    <body>
        <table>
      <form action="post.php" method=post>
         <tr>
         <th>NAME</th>
         <td><input type="text" name="name"></td>
         </tr>
            <tr>
            <th colspan='2' align="center"><input type="submit" name="button" value="OK" onClick="Show()" id="submit">
            <input type="reset" name="button" value="CANCEL" onClick="Reset()" id="reset">
            </th>
            </tr>
      </form>
        </table>
    </body>
</html>
<br>
<br>
<?php

$a=$_POST['name'];
echo "NAME: ",$a;

?>
