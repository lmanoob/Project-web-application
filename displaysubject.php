<?php
include 'conn.php';
echo "<table border='1'><tr><th>Subject Code</th><th>Subject Name</th>";
echo "<th>Subject Description</th><th>Subject Credit</th><th>Action</th></tr>";
$result = mysqli_query($conn, "select * from subject");
while ($row = mysqli_fetch_row($result)){
    echo "<tr><td><a href=subjectdetails.php?subject_code=$row[0]>$row[0]</a></td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td><a href=update.php?subject_code=$row[0]>Update</a>";
    echo "&nbsp;&nbsp;&nbsp;";
    echo "<a href=delete.php?subject_code=$row[0]>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>