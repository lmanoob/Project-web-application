<?php
include 'conn.php';

// send sql statement to database
$sql="insert into student (student_id, student_firstName, student_lastName, student_email, student_password, student_phoneNum)
values ('$_POST[id]','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[phone]')";
if(!mysqli_query($conn, $sql))
{
    die('Error: '.mysqli_error($conn));
}
// output successfully registered to the user
echo "Successfully registered <br>";
?>
