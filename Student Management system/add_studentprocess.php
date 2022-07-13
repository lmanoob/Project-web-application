<?php
include 'conn.php';

//send sql statement to the database
$sql="insert into student (student_id, student_firstName, student_lastName, student_email, student_password, student_phoneNum)
values ('$_POST[id]','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[phone]')";
if(!mysqli_query($conn, $sql))
{
    //output the type of error if fail 
    die('Error: '.mysqli_error($conn));
}
else{
    // bring to next location if sucessfull
     header('location:studentlist.php');
}
?>
