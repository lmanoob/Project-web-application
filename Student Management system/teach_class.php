<?php
	session_start();
	include 'conn.php';
	
	$id= $_SESSION['teacher_id'];
    $result = mysqli_query($conn, "SELECT * from class where teacher_id='$id'");
    $row = mysqli_fetch_row($result);
    echo"Class code:$row[0]</br>";
	echo"Class name: $row[1]</br>";
	echo"Number of student: $row[2]</br>";
	echo"Subject code: $row[3]</br>";
	echo"Teacher ID: $row[4]</br>";
    mysqli_free_result($result);
    mysqli_close($conn);
?>
