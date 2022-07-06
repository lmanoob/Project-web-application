<?php
include 'conn.php';
$subject_code = $_GET['subject_code'];
$result = mysqli_query($conn, "select * from subject
where subject_code='$subject_code'");
$row = mysqli_fetch_row($result);
    echo "<form action=update_processsubject.php?subject_id=$row[0] method=post>";
    echo "Subject Code: <input type=text name=SuCode value='$row[0]'><br>";
    echo "Subject Name: <input type=text name=SuName value='$row[1]'><br>";
    echo "Subject Description: <textarea name=SuDescript>$row[2]</textarea><br>";
    echo "Subject Credit: <input type=text name=credit value='$row[3]'><br>";
echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>
