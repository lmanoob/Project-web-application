<?php
include 'conn.php';
$class_code = $_GET['class_code'];
$result = mysqli_query($conn, "select * from class
where class_code=$userid");
$row = mysqli_fetch_row($result);
    echo "<form action=update_processclass.php?class_code=$row[0] method=post>";
    echo "Class Code: <input type='text' name='code' value='$row[0]' readonly><br>";
    echo "Class Name: <input type='text' name='classname' value='$row[1]'><br>";
    echo "Number of Student: <input type='text' name='NoS' value='$row[2]'><br>";
    echo "Subject Code: <input type='text' name='subjectcode' value='$row[3]'><br>";
    echo "Teacher ID: <input type='text' name='id' value='$row[4]'><br>";
    echo "</tr>";

echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>
