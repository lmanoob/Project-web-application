<?php
include 'conn.php';
$class_code = $_GET['class_code'];
//send sql statemnet to database to delete specific data
$delete =  "delete from class where class_code='$class_code'";
if (!mysqli_query($conn, $delete)){
    die ( 'Error: '. mysqli_error($conn));
}
else{
    echo "Sucessfully deleted<br>";
    //send user to classlist
    header('location:classlist.php');
mysqli_close($conn);
}
?>
