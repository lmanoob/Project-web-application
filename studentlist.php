<?php
include 'conn.php';
echo "<table border ='1'><tr><th>Student ID</th><th>First name</th>";
echo "<th>Last name</th><th>Email</th><th>Phone Number</th><th>Action</th><th>Update</th><th>Delete</th></tr>";
$result = mysqli_query($conn, "select * from student");
while($row = mysqli_fetch_row($result)){
	echo"<tr><td>$row[0]</td>";
	echo"<td><a href=studentdb.php?id=$row[0]>$row[1]</a></td>";
	echo"<td>$row[2]</td>";
	echo"<td>$row[3]</td>";
	echo"<td>$row[4]</td>";
	echo"<td><a href=updatestudent.php?id=$row[0]>Update</a>";
        echo "<a href=deletestudent.php?id=$row[0]>Delete</a>";
	echo"</tr>";
}echo"</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>
