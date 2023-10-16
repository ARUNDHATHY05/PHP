<html>
	<head>
	<title>TABLES</title>
	</head>
	<script type="text/javascript">
		 function ver()
		 {
		 if(document.forms.info.N1.value=="")
		 {
		 window.alert("PLEASE ENTER THE NAME!!!!!!");
		 document.forms.info.N1.focus();
		 }
		 if(document.forms.info.C1.value=="")
		 {
		 window.alert("ENTER YOUR CONTACT NUMBER!!!!!");
		 document.forms.info.C1.focus();
		 }
		  if(document.forms.info.A1.value=="")
		 {
		 window.alert("ENTER YOUR CONTACT NUMBER!!!!!");
		 document.forms.info.A1.focus();
		 }
		 }
		 </script>
    <body style='background-color:green'>
         <center>
           <h1>MA COLLEGE OF ENGINEERING</h1>
              <table border="2">
      <form id="info" onsubmit="return ver()" method="post">
	<tr>
      <th>NAME</th>
      <td><input type="text" name="name" id="N1"></td>
      </tr> 
		<tr>
		    <th>CONTACT NUMBER</th>
		    <td><input type="text" name="number" id="C1"></td>
		    </tr>
		<tr>
         <th>ADDRESS</th>
         <td><textarea type="text" name="address" id="A1"></textarea></td>
         </tr>
	 <tr>
           		        <th colspan='2' align="center"><input type="submit" name="button" value="OK" onClick="Show()">
                                               <input type="reset" name="button" value="CANCEL" onClick="Reset()">
                               </th>
                                   </tr>
           </table>
                  </form>
            </body>
    </center>
</html>
