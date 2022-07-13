<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!--link to bootsrap to use the css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
    <style>
      body{
        background-image: url("Image/background.jpg");
        background-color: aquamarine;
        height:100%;
        background-position: center;
        background-size: cover; /*Background image will cover the whole page*/
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
<?php
include 'conn.php';
include "./header_teach.html"; //header for navbar
echo "<br>";
$result = mysqli_query($conn, "select * from class");
echo "<div class=container>";
echo "<div class=row>";
echo "<table class=table>";
    echo "<tr class=bg-secondary><th>Class Code</th><th>Class Name</th><th>Number of Student</th><th>Subject Code</th><th>Teacher ID</th><th>Action </th></tr>";
	  //make a list from database in this case. All the data in the class table (Class code, Class Name, Number of students, Subject Code, Teacher ID)
while($row = mysqli_fetch_row($result)){ 
    echo "<tr class=bg-info><th scope=col>$row[0]</th><th scope=col>$row[1]</th><th scope=col>$row[2]</th><th scope=col >$row[3]</th><th scope=col>$row[4]</th>";
	//send user to  page for update or delete
	echo "<th class=bg-secondary scope=col><a class=link-info href=updateclass.php?class_code=$row[0]> Update </a><a class=link-info href=deleteclass.php?class_code=$row[0]> Delete </a></th></tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";
echo "<div class='col-md-12 text-center'>";
echo "<button type=button class='btn btn-dark'><a class=link-light href=addclass.php>Add a class</a></button>";
	//link to implement javascript bootsrtap
echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'></script>";
echo "</div>";
mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>
