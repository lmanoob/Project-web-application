<?php
include 'conn.php';
$sql="insert into register (class_code, student_id)
values ('$_POST[id]','$_POST[class_code])";
if(!mysqli_query($conn, $sql))
{
    die('Error: '.mysqli_error($conn));
}
echo "Successfully registered <br>";
?>
