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
	include "./header.html";
    echo "<br>";
	$id= $_SESSION['student_id'];
    $result = mysqli_query($conn, "SELECT * from class where class_code IN (select class_code from register where student_id='$id')");
	echo "<div class=container>";
    echo "<div class=row>";
    echo "<table class=table>";
    while ($row = mysqli_fetch_row($result)){
		echo "<tr class=bg-primary><th>Class Code</th><th scope=col>$row[0]</th></tr>";
    	echo "<tr class=bg-info><th>Class Name</th><th scope=col>$row[1]</th></tr>";
   		echo "<tr class=bg-info><th>Number of student</th><th scope=col>$row[2]</th></tr>";
    	echo "<tr class=bg-info><th>Subject code</th><th scope=col>$row[3]</th></tr>";
    	echo "<tr class=bg-info><th>Teacher ID</th><th scope=col>$row[4]</th></tr>";
	
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
