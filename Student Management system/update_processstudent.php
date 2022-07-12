<?php
include 'conn.php';
$id = $_GET['id'];
$newid = $_POST['newid'];
$update = "UPDATE student SET student_id='$_POST[newid]', student_firstname='$_POST[firstname]',
student_lastname='$_POST[lastname]',student_email='$_POST[email]',
student_password='$_POST[password]',student_phoneNum='$_POST[phone]'
where student_id='$id'";
if(!mysqli_query($conn, $update)){ die('Error: '.mysqli_error($conn)); 
}else{
    header('location:studentlist.php');
	mysqli_close($conn);
}
?>
