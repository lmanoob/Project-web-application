<?php
include 'conn.php'; //call conn
$sql="insert into register (class_code, student_id) 
values ('$_POST[class_code]','$_POST[id]')"; //function for sql query
if(!mysqli_query($conn, $sql))
{
    die('Error: '.mysqli_error($conn));
}else{
    header('location:viewownclass.php');
	mysqli_close($conn); // close the sql section
}
?>
