<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
    <style>
      body{
        background-image: url("Image/background.jpg");
        background-color: aquamarine;
        height:100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }
	  #tengah{
		  position:relative;
		  left:45%;
	  }
    </style>
  </head>
  <body>
<?php
include 'conn.php'; //call conn
include "./header_teach.html"; //call header
$result = mysqli_query($conn, "select * from student"); //sql query  for putting the data in the form
echo "<div class=container>";
echo "<div class=row>";
echo "<table class=table>";
echo "<tr class=bg-secondary><th>Student ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Phone Number</th><th>Action </th></tr>";
while($row = mysqli_fetch_row($result)){
    echo "<tr class=bg-info><th scope=col>$row[0]</th><th scope=col>$row[1]</th><th scope=col>$row[2]</th><th scope=col>$row[3]</th><th scope=col>$row[4]</th><th scope=col>$row[5]</th>";
	echo "<th class=bg-secondary scope=col><a class=link-info href=updatestudent.php?student_id=$row[0]> Update </a><a class=link-info href=deletestudent.php?student_id=$row[0]> Delete </a></th></tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";
echo "<button id=tengah type=button class='btn btn-dark'><a class=link-light href=register_student.php>Add a Student</a></button>";
mysqli_free_result($result);
mysqli_close($conn);
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
