<?php
include 'conn.php';
echo "<table border ='1'><tr><th>Teacher ID</th><th>First name</th>";
echo "<th>Last name</th><th>Email</th><th>Phone Number</th><th>Action</th></tr>";
$result = mysqli_query($conn, "select * from teacher");
while($row = mysqli_fetch_row($result)){
	echo"<tr><td>$row[0]</td>";
	echo"<td><a href=teacherdetails.php?teacher_id=$row[0]>$row[1]</a></td>";
	echo"<td>$row[2]</td>";
	echo"<td>$row[3]</td>";
	echo"<td>$row[5]</td>";
	echo"<td><a href=update.php?userid=$row[0]>Update</a></td>";
	echo"&nbsp;&nbsp;&nbsp;";
	echo"<td><a href=delete.php?userid=$row[0]>Delete</a></td>";
	echo"</tr>";
}echo"</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>