<?php
$conn = new mysqli("localhost", "root", "","BPC");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM STUDENT";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
echo "<table border='1'> <tr>
<td>ID</td><td>Name</td></tr>";
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>". $row["ID"]. "</td><td> " . $row["NAME"]. " </td></tr><br>";
}
echo"</table>";
} else{
echo "0 results";
}
$conn->close();
?>
