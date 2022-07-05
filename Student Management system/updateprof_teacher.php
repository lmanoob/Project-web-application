	<?php
	session_start();
	include 'conn.php';
	$id=$_GET['id'];
	$update = "UPDATE teacher SET teacher_firstName='$_POST[firstname]',
	teacher_lastName='$_POST[lastname]',teacher_email='$_POST[email]',
	teacher_password='$_POST[password]',teacher_phoneNum='$_POST[phone]'
	where teacher_id='$id'";
	if (!mysqli_query($conn, $update))
	{ 
		die ('Error: '.mysqli_error($conn));
	}
	$result = mysqli_query($conn, "select * from teacher where teacher_id='$id'");
	$row = mysqli_fetch_row($result);
		echo "Teacher ID : $row[0]<br>First name : $row[1]<br>";
		echo "Last name : $row[2]<br>Email : $row[3]<br>";
		echo "Password : $row[4]<br>Student phone number : $row[5]<br>";
		echo "<a href=home_teacher.php>Home</a>";
	mysqli_free_result($result);
	mysqli_close($conn);
	?>
