<?php
include 'conn.php';
$id = $_GET['id'];
$delete =  "delete from student where student_id='$id'";
if (!mysqli_query($conn, $delete)){
    die ( 'Error: '. mysqli_error($conn));
}
    echo "Sucessfully deleted<br>";
    echo "<a href=studentlist.php>Back to table</a>";
mysqli_close($conn);
?>
