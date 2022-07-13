<?php
	session_start();
	include 'conn.php';
	$teacher_id= $_SESSION['teacher_id'];
	$id=$_GET['id'];
	//send sql statement to the database
	$update = "UPDATE teacher SET teacher_firstName='$_POST[firstname]',
	teacher_lastName='$_POST[lastname]',teacher_email='$_POST[email]',
	teacher_password='$_POST[password]',teacher_phoneNum='$_POST[phone]'
	where teacher_id='$teacher_id'";
	if (!mysqli_query($conn, $update))
	{ 
		die ('Error: '.mysqli_error($conn));
	}
	else{
    	echo "Sucessfully deleted<br>";
    	header('location:teacherprofile.php');
	mysqli_close($conn);
}
?>
