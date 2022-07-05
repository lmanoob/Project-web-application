<?php
include 'conn.php';
echo "<table border ='1'><tr><th>Subject Code</th><th>Subject Name</th>";
echo "<th>Subject Description</th><th>Subject Credit</th><th>Action</th></tr>";
$result = mysqli_query($conn, "select * from subject");
while($row = mysqli_fetch_row($result)){
	echo"<tr><td>$row[0]</td>";
	echo"<td>$row[1]</a></td>";
	echo"<td>$row[2]</td>";
	echo"<td>$row[3]</td>";
	echo"<td><a href=update.php?userid=$row[0]>Update</a></td>";
	echo"&nbsp;&nbsp;&nbsp;";
	echo"<td><a href=delete.php?userid=$row[0]>Delete</a></td>";
	echo"</tr>";
}echo"</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>
