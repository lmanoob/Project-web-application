<?php
include 'conn.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "select * from student
where id=$id");
$row = mysqli_fetch_row($result);
    echo "<form action=update_processstudent.php?id=$row[0] method=post>";
    echo "Student ID: <input type='text' name='id' value='$row[0]' readonly><br>";
    echo  "Firstname: <input type='text' name='firstname' value='$row[1]'><br>";
    echo  "Lastname: <input type='text' name='lastname'  value='$row[2]'><br>";
    echo  "Email: <input type='text' name='email' value='$row[3]'><br>";
    echo  "Password: <input type='text' name='password' value='$row[4]'><br>";
    echo  "Phone Number: <input type='text' name='phone' value='$row[5]'><br>";
echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>
