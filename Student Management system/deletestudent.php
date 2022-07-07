<?php
include 'conn.php';
$id = $_GET['student_id'];
$delete =  "delete from student where student_id='$id'";
if (!mysqli_query($conn, $delete)){
    die ( 'Error: '. mysqli_error($conn));
}
else{
    echo "Sucessfully deleted<br>";
    echo "<a href=studentlist.php>Back to table</a>";
    header('location:studentlist.php');
mysqli_close($conn);
    
}
    
?>
