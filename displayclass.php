<?php
include 'conn.php';
echo "<table border ='1'><tr><th>Class Code</th><th>Class Name</th>";
echo "<th>Number of Student</th><th>Subject Code</th><th>Teacher ID</th><th>Action</th></tr>";
$result = mysqli_query($conn, "select * from class");
while($row = mysqli_fetch_row($result)){
	echo"<tr><td><a href=classdetails.php?class_code=$row[0]>$row[0]</a></td>";
	echo"<td>$row[1]</td>";
	echo"<td>$row[2]</td>";
	echo"<td>$row[3]</td>";
	echo"<td>$row[4]</td>";
	echo"<td><a href=update.php?userid=$row[0]>Update</a></td>";
	echo"&nbsp;&nbsp;&nbsp;";
	echo"<td><a href=delete.php?userid=$row[0]>Delete</a></td>";
	echo"</tr>";
}echo"</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>