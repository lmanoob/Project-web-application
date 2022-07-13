	<?php
	session_start();
	include 'conn.php';
	$id=$_GET['id'];
	//send sql statement to the database
	$update = "UPDATE student SET student_firstName='$_POST[firstname]',
	student_lastName='$_POST[lastname]',student_email='$_POST[email]',
	student_password='$_POST[password]',student_phoneNum='$_POST[phone]'
	where student_id='$id'";
	if (!mysqli_query($conn, $update))
	{ 
		die ('Error: '.mysqli_error($conn));
	}else{
    	echo "Sucessfully deleted<br>";
    	header('location:studentprofile.php');
	mysqli_close($conn);
}
?>
