<?php
include 'conn.php';
$id = $_GET['student_id'];
//send sql statement to delete specific student based on their id
$delete =  "delete from student where student_id='$id'";
if (!mysqli_query($conn, $delete)){
    die ( 'Error: '. mysqli_error($conn));
}
else{
    //send back to studentlist
    header('location:studentlist.php');
mysqli_close($conn);
    
}
    
?>
