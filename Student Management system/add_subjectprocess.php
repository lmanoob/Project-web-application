<?php
include 'conn.php';

$sql="insert into subject (subject_code, subject_name, subject_desc, subject_credit)
values ('$_POST[sub_code]','$_POST[sub_name]','$_POST[sub_desc]','$_POST[sub_cred]')";
if(!mysqli_query($conn, $sql))
{
    die('Error: '.mysqli_error($conn));
}
else{
     header('location:subjectlist.php');
}
?>
