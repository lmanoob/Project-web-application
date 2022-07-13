<?php
include 'conn.php';

//send sql statement to the database
$sql="insert into teacher (teacher_id, teacher_firstName, teacher_lastName, teacher_email, teacher_password, teacher_phoneNum)
values ('$_POST[id]','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[phone]')";
if(!mysqli_query($conn, $sql))
{
    die('Error: '.mysqli_error($conn));//output the type of error if fail
}
// output if sucess
echo "Successfully registered <br>";
?>
