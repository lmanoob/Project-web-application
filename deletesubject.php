<?php
include 'conn.php';
$subject_code = $_GET['subject_code'];
$delete =  "delete from subject where subject_code=$subject_code";
if (!mysqli_query($conn, $delete)){
    die ( 'Error: '. mysqli_error($conn));
}
    echo "Sucessfully deleted<br>";
    echo "<a href=displaysubject.php>Back to table</a>";
mysqli_close($conn);
?>
