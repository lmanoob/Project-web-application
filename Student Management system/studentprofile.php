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
        height:400px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
<?php
	session_start();
	include 'conn.php';

	$id= $_SESSION['student_id'];
    include "./header.html";
    echo "<br>";
    $result = mysqli_query($conn, "SELECT * from student where student_id='2020461282'");
    $row = mysqli_fetch_row($result);
    echo "<div class=container>";
    echo "<div class=row>";
    echo "<div class= col align-self-center>";
    echo "<table class=table>";
    echo "<tr class=bg-info><th>Student ID</th><th scope=col>$row[0]</th></tr>";
    echo "<tr class=bg-info><th>First Name</th><th scope=col>$row[1]</th></tr>";
    echo "<tr class=bg-info><th>Last Name</th><th scope=col>$row[2]</th></tr>";
    echo "<tr class=bg-info><th>Email</th><th scope=col>$row[3]</th></tr>";
    echo "<tr class=bg-info><th>Password</th><th scope=col>$row[4]</th></tr>";
    echo "<tr class=bg-info><th>Phone Number</th><th scope=col>$row[5]</th></tr>";
    echo "</table>";
    echo "<a class='btn btn-primary' href=updateprofile.php?student_id=$row[0]>Update</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    mysqli_free_result($result);
    mysqli_close($conn);

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
