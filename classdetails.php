<?php
include 'conn.php';
$code = $_GET['class_code'];
$result = mysqli_query($conn, "select * from class where class_code='$code'");
$row = mysqli_fetch_row($result);
echo "Class Code: $row[0]<br>";
echo "Class Name: $row[1]<br>";
echo "Number of Student: $row[2]<br>";
echo "Subject Code: $row[3]<br>";
echo "Teacher ID: $row[4]<br>";
echo "</tr>";
mysqli_free_result($result);
mysqli_close($conn);
?>