<?php
	session_start();
	include 'conn.php';

	$id= $_SESSION['student_id'];
    $result = mysqli_query($conn, "SELECT * from student where student_id='$id'");
    $row = mysqli_fetch_row($result);
    echo "Student ID: $row[0]<br>";
    echo "First Name: $row[1]<br>";
    echo "Last Name: $row[2]<br>";
    echo "Email: $row[3]<br>";
    echo "Password: $row[4]<br>";
    echo "Phone Number: $row[5]<br>";
    echo "<a href=updateprofile.php?student_id=$row[0]>Update</a>";
    mysqli_free_result($result);
    mysqli_close($conn);

?>
