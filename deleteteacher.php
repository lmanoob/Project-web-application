<?php
include 'conn.php';
$teacher_id = $_GET['teacher_id'];
$delete =  "delete from teacher where teacher_id=$teacher_id";
if (!mysqli_query($conn, $delete)){
    die ( 'Error: '. mysqli_error($conn));
}
    echo "Sucessfully deleted<br>";
    echo "<a href=displayteacher.php>Back to table</a>";
mysqli_close($conn);
?>
