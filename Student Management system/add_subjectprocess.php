<?php
include 'conn.php';

//Send sql statement to database
$sql="insert into subject (subject_code, subject_name, subject_desc, subject_credit)
values ('$_POST[sub_code]','$_POST[sub_name]','$_POST[sub_desc]','$_POST[sub_cred]')";
if(!mysqli_query($conn, $sql))
{
    //Output the type of error if fail
    die('Error: '.mysqli_error($conn));
}
else{
    //Send user to the next page
     header('location:subjectlist.php');
}
?>
