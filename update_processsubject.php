<?php
include 'conn.php';
$subject_code = $_GET['subject_code'];
$update = "UPDATE subject SET subject_name='$_POST[SuName]',
subject_desc='$_POST[SuDescript]',subject_credit='$POST[credit]',
where subject_id=$subject_id";
if(!mysqli_query($conn, $update)){ die('Error: '.mysqli_error($conn)); }
$result = mysqli_query($conn, "select * from user where user_id=$userid");
$row = mysqli_fetch_row($result);
    echo "Subject Code : $row[0]<br>Subject name : $row[1]><br>";
    echo "Subject Description : $row[2]><br>Subject credit : $row[3]";
    echo "<ahref=displaysubject.php>Back to table</a>";
mysqli_free_result($result);
mysqli_close($conn);
?>
