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
	include './header_teach.html';
	$id= $_SESSION['teacher_id']; //id from teacher table
    $result = mysqli_query($conn, "SELECT * from class where teacher_id='$id'"); // select from teacher table
    echo "<div class=container>";
    echo "<div class=row>";
    echo "<table class=table>";
    echo "<tr class=bg-secondary><th>Class Code</th><th>Class Name</th><th>Number of students</th><th>Subject Code</th><th>Teacher ID </th></tr>";
while($row = mysqli_fetch_row($result)){
    echo "<tr class=bg-info><th scope=col>$row[0]</th><th scope=col>$row[1]</th><th scope=col>$row[2]</th><th scope=col>$row[3]</th><th scope=col>$row[4]</th></tr>";

}
    echo "</table>";
    echo "</div>";
    echo "</div>";
	mysqli_free_result($result);
	mysqli_close($conn);
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
