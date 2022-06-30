<?php
include 'conn.php';
$teacher_id = $_GET['teacher_id'];
$update = "UPDATE teacher SET teacher_firstName='$_POST[firstname]',
teacher_lastName='$_POST[lastname]',teacher_email='$POST[email]',
teacher_password='$_POST[password]',teacher_phoneNum='$_POST[phone]')
where teacher_id=$teacher_id";
if(!mysqli_query($conn, $update)){ die('Error: '.mysqli_error($conn)); }
$result = mysqli_query($conn, "select * from teacher where teacher_id=$teacher_id");
$row = mysqli_fetch_row($result);
    echo "User ID : $row[0]<br>First name : $row[1]><br>";
    echo "Last name : $row[2]><br>Email : $row[3]";
    echo "Password : $row[4]><br>Phone Number : $row[5]<br>";
    echo "<ahref=displayteacher.php>Back to table</a>";
mysqli_free_result($result);
mysqli_close($conn);
?>
