<?php
	session_start();
	include 'conn.php';

	$id= $_SESSION['student_id'];
    $result = mysqli_query($conn, "SELECT * from subject where subject_code=(select subject_code from class where class_code=(select class_code from register where student_id='$id'))");
    $row = mysqli_fetch_row($result);
    echo "Subject Code: $row[0]<br>";
    echo "Subject Name: $row[1]<br>";
    echo "Subject Description: $row[2]<br>";
    echo "Subject Credit: $row[3]<br>";
    mysqli_free_result($result);
    mysqli_close($conn);

?>