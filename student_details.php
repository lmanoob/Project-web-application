<?php
include 'conn.php';
$studentid = $_GET['student'];
$result = mysqli_query($conn, "select * from user where user_id=$studentid");
$row = mysqli_fetch_row($result);
echo "Student ID: $row[0]<br>";
echo "First Name: $row[1]<br>";
echo "Last Name: $row[2]<br>";
echo "Email: $row[3]<br>";
echo "Password: $row[4]<br>";
echo "Phone Number: $row[5]<br>";
echo "</tr>";
mysqli_free_result($result);
mysqli_close($conn);
?>