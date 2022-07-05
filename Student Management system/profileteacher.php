<?php
	session_start();
	include 'conn.php';

	$id= $_SESSION['teacher_id'];
    $result = mysqli_query($conn, "SELECT * from teacher where teacher_id='$id'");
    $row = mysqli_fetch_row($result);
    echo "Teacher ID: $row[0]<br>";
    echo "First Name: $row[1]<br>";
    echo "Last Name: $row[2]<br>";
    echo "Email: $row[3]<br>";
    echo "Phone Number: $row[5]<br>";
    echo "<a href=updateprofile_teacher.php?student_id=$row[0]>Update</a>";
    mysqli_free_result($result);
    mysqli_close($conn);

?>
