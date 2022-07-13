<?php
include 'conn.php';
$subject_code = $_GET['subject_code'];
//send sql statement to delete a subject based on their code
$delete =  "delete from subject where subject_code='$subject_code'";
if (!mysqli_query($conn, $delete)){
    die ( 'Error: '. mysqli_error($conn));
}
else{
    //send back to subjectlist
    header('location:subjectlist.php');
mysqli_close($conn);
}
?>
