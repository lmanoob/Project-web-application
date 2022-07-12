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
include 'conn.php';
include './header_teach.html';
$class_code = $_GET['class_code'];
$newclasscode=$_POST['code'];
$update = "UPDATE class SET class_code='$_POST[code]',
class_name='$_POST[classname]',number_of_student='$_POST[NoS]', subject_code ='$_POST[subject_code]',
teacher_id='$_POST[teacher_id]' where class_code='$class_code'";
if(!mysqli_query($conn, $update)){ die('Error: '.mysqli_error($conn)); }
$result = mysqli_query($conn, "select * from class where class_code='$newclasscode'");
$row = mysqli_fetch_row($result);
echo "<div class=container>";
echo "<div class=row>";
echo "<table class=table>";
echo "<tr class=bg-info><th>Class Code</th><th scope=col>$row[0]</th></tr>";
echo "<tr class=bg-info><th>Class Name</th><th scope=col>$row[1]</th></tr>";
echo "<tr class=bg-info><th>Number of Students</th><th scope=col>$row[2]</th></tr>";
echo "<tr class=bg-info><th>Subject Code</th><th scope=col>$row[3]</th></tr>";
echo "<tr class=bg-info><th>Teacher Id</th><th scope=col>$row[4]</th></tr>";
echo "</table>";
echo "</div>";
echo "</div>";
echo "<div class='col-md-12 text-center'>";
echo "<button type=button class='btn btn-dark'><a class=link-light href=classlist.php>Back to table</a></button>";
echo "</div>";
mysqli_free_result($result);
mysqli_close($conn);
?>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
