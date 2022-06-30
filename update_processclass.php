<?php
include 'conn.php';
$class_code = $_GET['class_code'];
$update = "UPDATE class SET class_code='$_POST[code]',
class_name='$_POST[classname]',number_of_student='$POST[NoS]',
teacher_id='$_POST[id]')
where class_code=$class_code";
if(!mysqli_query($conn, $update)){ die('Error: '.mysqli_error($conn)); }
$result = mysqli_query($conn, "select * from user where user_id=$userid");
$row = mysqli_fetch_row($result);

    echo "Class code : $row[0]<br>Class name : $row[1]><br>";
    echo "Number of Students : $row[2]><br>Teacher id : $row[3]";
    echo "<ahref=displayclass.php>Back to table</a>";
mysqli_free_result($result);
mysqli_close($conn);
?>
