<?php
include 'conn.php';
$class_code = $_GET['class_code'];
$delete =  "delete from user where class_code=$class_code";
if (!mysqli_query($conn, $delete)){
    die ( 'Error: '. mysqli_error($conn));
}
    echo "Sucessfully deleted<br>";
    echo "<a href=displaysclass.php>Back to table</a>";
mysqli_close($conn);
?>
