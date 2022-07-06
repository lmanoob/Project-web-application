<html>
    <head>
        <title>Teacher Profile</title>
    </head>
    <style>
			fieldset{
		border: 1px solid black;
		width: 50%;
		margin:auto;
		}
	button.a{
		color:inherit;
		text-decoration:none;
	}
	</style>
	<body>
<?php
include 'conn.php';
echo "<table border ='1'><tr><th>Class Code</th><th>Class Name</th>";
echo "<th>Number of Student</th><th>Subject Code</th><th>Teacher ID</th></tr>";
$result = mysqli_query($conn, "select * from class");
while($row = mysqli_fetch_row($result)){
	echo"<tr><td>$row[0]</td>";
	echo"<td>$row[1]</td>";
	echo"<td>$row[2]</td>";
	echo"<td><a href=subjectdetails.php?subject_code=$row[3]>$row[3]</a></td>";
	echo"<td>$row[4]</td>";
	echo"<td><a href=updateclass.php?class_code=$row[0]>Update</a></td>";
	echo"&nbsp;&nbsp;&nbsp;";
	echo"<td><a href=deleteclass.php?class_code=$row[0]>Delete</a></td>";
	echo"</tr>";
}echo"</table>";
echo "<button type=button><a href=addclass.php>Add a class</a></button>";
mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>
