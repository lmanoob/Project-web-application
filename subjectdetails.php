<?php
include 'conn.php';
$subject =$_GET['subject_code'];
$result = mysqli_query($conn, "select * from subject where subject_code='$subject'");
while($row = mysqli_fetch_row($result)){
    echo "Subject Code: $row[0]<br>";
    echo "Subject Name: $row[1]<br>";
    echo "Subject Description: $row[2]<br>";
    echo "Subject Credit: $row[3]<br>";
    echo "</tr>";
}
mysqli_free_result($result);
mysqli_close($conn);
?>