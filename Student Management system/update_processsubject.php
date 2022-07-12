<?php
include 'conn.php';
include './header_teach.html';
echo "<br>";
$subject_code = $_GET['subject_id'];
$new_code=$_POST['SuCode'];
$update = "UPDATE subject SET subject_code='$_POST[SuCode]',subject_name='$_POST[SuName]',
subject_desc='$_POST[SuDescript]',subject_credit='$_POST[credit]'
where subject_code='$subject_code'";
if(!mysqli_query($conn, $update)){ die('Error: '.mysqli_error($conn)); 
}
else{
    header('location:subjectlist.php');
	mysqli_close($conn);
}
?>
