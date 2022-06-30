
	<?php
	include 'conn.php';
	$id= $_POST['id'];
	$result = mysqli_query($conn, "select class_code from class");
	$result2 = mysqli_query($conn, "select student_id from student where student_id=$id");
	$row = mysqli_fetch_row($result2);
	$row2 = mysqli_fetch_row($result);
	echo "<form action=add2.php method = post>";
	echo "Student ID: <input type=text name=id value=$row[0] readonly><br>";
	echo "<label for=cars>Pick A Class:</label><br>";
	echo "<select>";
	foreach( $result as $row2 ){
	echo "<option>" . $row2['class_code'] . "</option>";}

	echo "</select><br>";
	echo "<input type=submit value=Register>";
	?>
