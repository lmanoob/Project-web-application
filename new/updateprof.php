<?php
session_start();
include 'conn.php';
$id = $_SESSION['student_id'];
$update = "UPDATE 'student' SET student_firstName='$_POST[firstname]',
student_lastName='$_POST[lastname]',student_email='$_POST[email]',
student_password='$_POST[password]',student_phoneNum='$_POST[phone]')
where student_id='$id'";
if (!mysqli_query($conn, $update))
{ 
    die ('Error: '.mysqli_error($conn));
}
$result = mysqli_query($conn, "select * from student where student_id='$id'");
$row = mysqli_fetch_row($result);
    echo "Student ID : $row[0]<br>First name : $row[1]><br>";
    echo "Last name : $row[2]><br>Email : $row[3]";
    echo "Password : $row[4]><br>Student phone number : $row[5]<br>";
    echo "<ahref=studentlist.php>Back to table</a>";
mysqli_free_result($result);
mysqli_close($conn);
?>