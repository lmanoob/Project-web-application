<?php
include 'conn.php';
$subject_code = $_GET['subject_code'];
$delete =  "delete from subject where subject_code='$subject_code'";
if (!mysqli_query($conn, $delete)){
    die ( 'Error: '. mysqli_error($conn));
}
else{
    echo "Sucessfully deleted<br>";
    header('location:subjectlist.php');
    echo "<a href=subjectlist.php>Back to table</a>";
mysqli_close($conn);
}
?>
