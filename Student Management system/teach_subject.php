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
    include "./header_teach.html";
    echo "<br>";
	$id= $_SESSION['teacher_id'];
	$result = mysqli_query($conn, "SELECT * from subject where subject_code IN (select subject_code from class where teacher_id='$id')"); // fetch from database
    echo "<div class=container>";
    echo "<div class=row>";
    echo "<table class=table>";
	echo "<tr class=bg-secondary><th>Subject Code</th><th>Subject Name</th><th>Subject Description</th><th>Subject Credit</th></tr>"; //showing the subject thought
while($row = mysqli_fetch_row($result)){
    echo "<tr class=bg-info><th scope=col>$row[0]</th><th scope=col>$row[1]</th><th scope=col>$row[2]</th><th scope=col>$row[3]</th></tr>";

}
    echo "</table>";
    echo "</div>";
    echo "</div>";
	mysqli_free_result($result);// show the result from the fetching
	mysqli_close($conn);
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
