<?php
include 'conn.php';
$class_code = $_GET['class_code'];
$result = mysqli_query($conn, "select * from class where class_code='$class_code'");
$result1 = mysqli_query($conn, "SELECT subject_code FROM subject");
$result2 = mysqli_query($conn, "SELECT teacher_id FROM teacher");
$row = mysqli_fetch_row($result);
$row1 = mysqli_fetch_row($result1);
$row2 = mysqli_fetch_row($result2);
    echo "<form action=update_processclass.php?class_code=$row[0] method=post>";
    echo "Class Code: <input type='text' name='code' value='$row[0]' readonly><br>";
    echo "Class Name: <input type='text' name='classname' value='$row[1]'><br>";
    echo "Number of Student: <input type='text' name='NoS' value='$row[2]'><br>";
    echo "<label for=subject>Pick Subject Code:</label><br>";
		echo "<select name='subject_code'>";
		foreach( $result1 as $row1){
			$subject_code=$row1['subject_code'];
			echo "<option value=".$subject_code.">" . $subject_code. "</option>";}
		echo "</select><br>";
	
	echo "<label for=teacher>Pick Teacher Id for the class:</label><br>";
		echo "<select name='teacher_id'>";
		foreach( $result2 as $row2 ){
			$teacher_id=$row2['teacher_id'];
			echo "<option value=".$teacher_id.">" . $teacher_id . "</option>";}

		echo "</select><br>";

echo "<input type=submit value=Update></form>";
mysqli_free_result($result);
mysqli_close($conn);
?>
