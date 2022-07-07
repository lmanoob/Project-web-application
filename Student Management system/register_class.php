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
       #kotak-tengah{
         border-radius: 50px;
         background-color: white;
         width: 30%;
         margin:auto; /* Center the div */
         position:relative;
         padding: 50px;
		 top: 50%;
        }
    </style>
  </head>
<body>
<?php
	session_start();
	include 'conn.php';
	include './header.html';
	
	$id= $_SESSION['student_id'];
	$result = mysqli_query($conn, "SELECT class_code FROM class");
	$result2 = mysqli_query($conn, "SELECT student_id FROM student WHERE student_id='$id'");
	$row = mysqli_fetch_row($result2);
	$row2 = mysqli_fetch_row($result);
	
	echo "<div id='kotak-tengah'>";
    echo "<form action='registerclass.php' method='post'>";
	
    echo "<div class='mb-3'>";
    echo "<label for='id' class='form-label'>Student ID:</label>"; 
    echo "<input type='text' class='form-control' name='id' value='$row[0]' readonly>";
    echo "</div>";
	
	echo "<div class=mb-3>";
	echo "<label for='class_code'>Pick A Class:</label><br>";
	echo "<select class='form-select' aria-label='Default select example' name='class_code'>";
	echo "<option selected>Pick A Class</option>";
	foreach( $result as $row2 ){
	$class_code=$row2['class_code'];
	echo "<option value=".$class_code.">" . $row2['class_code'] . "</option>";}
	echo "</select></div><br>";
    echo "<input type='submit' class='btn btn-primary' value=Register></form>";
	echo "</div>";
	echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'></script>";
    echo "</body>";
    echo "</html>";
?>
