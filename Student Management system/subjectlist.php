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
    </style>
  </head>
  <body>
<?php
include 'conn.php';
include "./header_teach.html";
echo "<br>";
$result = mysqli_query($conn, "select * from subject");
echo "<div class=container>";
echo "<div class=row>";
echo "<table class=table>";
while($row = mysqli_fetch_row($result)){
	echo "<tr class=bg-primary><th>Subject Code</th><th scope=col>$row[0]</th></tr>";
    echo "<tr class=bg-info><th>Subject Name</th><th scope=col>$row[1]</th></tr>";
    echo "<tr class=bg-info><th>Subject Description</th><th scope=col>$row[2]</th></tr>";
    echo "<tr class=bg-info><th>Subject Credit</th><th scope=col>$row[3]</th></tr>";
    echo "<tr class=bg-secondary><th>Action </th><th scope=col><a class=link-info href=updatesubject.php?subject_code=$row[0]> Update </a><a class=link-info href=deletesubject.php?subject_code=$row[0]> Delete </a></th></tr>";

}
echo "</table>";
echo "</div>";
echo "</div>";
echo "<div class='col-md-12 text-center'>";
echo "<button type=button class='btn btn-dark'><a class=link-light href=add_subject.php>Add a subject</a></button>";
echo "</div>";
mysqli_free_result($result);
mysqli_close($conn);
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
