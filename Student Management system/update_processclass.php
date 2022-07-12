<?php
include 'conn.php';
include './header_teach.html';
$class_code = $_GET['class_code'];
$newclasscode=$_POST['code'];
$update = "UPDATE class SET class_code='$_POST[code]',
class_name='$_POST[classname]',number_of_student='$_POST[NoS]', subject_code ='$_POST[subject_code]',
teacher_id='$_POST[teacher_id]' where class_code='$class_code'";
if(!mysqli_query($conn, $update)){ die('Error: '.mysqli_error($conn)); 
}
else{
    header('location:classlist.php');
	mysqli_close($conn);
}
?>
