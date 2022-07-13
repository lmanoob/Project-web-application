<?php
include 'conn.php';

//send sql statement to the database
$sql="insert into class (class_code, class_name, number_of_student, subject_code, teacher_id)
values ('$_POST[classcode]','$_POST[classname]','$_POST[NoS]','$_POST[subject_code]','$_POST[teacher_id]')";
if(!mysqli_query($conn, $sql))
{
    //output the type of error if fail
    die('Error: '.mysqli_error($conn));
}
else{
    // output if sucess
     header('location:classlist.php');
}
?>
