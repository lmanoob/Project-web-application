<?php
	session_start();
	include 'conn.php';

	$id= $_SESSION['student_id'];
	$result = mysqli_query($conn, "SELECT class_code FROM class");
	$result2 = mysqli_query($conn, "SELECT student_id FROM student WHERE student_id='$id'");
	$row = mysqli_fetch_row($result2);
	$row2 = mysqli_fetch_row($result);
	echo "<form action=registerclass.php method =post>";
	echo "Student ID: <input type=text name=id value=$row[0] readonly><br>";
	echo "<label for=cars>Pick A Class:</label><br>";
	echo "<select name='class_code'>";
	foreach( $result as $row2 ){
	$class_code=$row2['class_code'];
	echo "<option value=".$class_code.">" . $row2['class_code'] . "</option>";}

	echo "</select><br>";
	echo "<input type=submit value=Register></form>";
?>
