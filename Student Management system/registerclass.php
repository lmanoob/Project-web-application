<?php
include 'conn.php';
$sql="insert into register (class_code, student_id)
values ('$_POST[class_code]','$_POST[id]')";
if(!mysqli_query($conn, $sql))
{
    die('Error: '.mysqli_error($conn));
}
echo "Successfully registered <br>";
?>