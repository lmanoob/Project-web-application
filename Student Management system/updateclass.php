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
         padding: 20px;
        }
    </style>
  </head>
<body>
<?php
include 'conn.php';
$class_code = $_GET['class_code'];
include "./header_teach.html";
$result = mysqli_query($conn, "select * from class where class_code='$class_code'");
$result1 = mysqli_query($conn, "SELECT subject_code FROM subject");
$result2 = mysqli_query($conn, "SELECT teacher_id FROM teacher");
$row = mysqli_fetch_row($result);
$row1 = mysqli_fetch_row($result1);
$row2 = mysqli_fetch_row($result2);
	echo "<div id='kotak-tengah'>";
    echo "<form action=update_processclass.php?class_code=$row[0] method=post>";
	
	echo "<div class=mb-3>";
    echo "<label for='code' class=form-label>Class Code:</label>"; 
    echo "<input type='text' class=form-control name='code' value='$row[0]'>";
    echo "</div>";
	
	echo "<div class=mb-3>";
    echo "<label for='classname' class=form-label>Class Name:</label>"; 
    echo "<input type='text' class=form-control name='classname' value='$row[1]'>";
    echo "</div>";
	
	echo "<div class=mb-3>";
    echo "<label for='NoS' class=form-label>Number of Student:</label>"; 
    echo "<input type='text' class=form-control name='NoS' value='$row[2]'>";
    echo "</div>";
	
	echo "<div class=mb-3>";
	echo "<label for='subject_code'>Pick A Class:</label><br>";
	echo "<select class='form-select' aria-label='Default select example' name='subject_code'>";
	echo "<option selected>Pick the Subject Code</option>";
	foreach( $result1 as $row1){
			$subject_code=$row1['subject_code'];
			echo "<option value=".$subject_code.">" . $subject_code. "</option>";}
	echo "</select><br>";
	
	echo "<div class=mb-3>";
	echo "<label for='teacher_id'>Pick A Class:</label><br>";
	echo "<select class='form-select' aria-label='Default select example' name='teacher_id'>";
	echo "<option selected>Pick the Teacher ID</option>";
	foreach( $result2 as $row2 ){
			$teacher_id=$row2['teacher_id'];
			echo "<option value=".$teacher_id.">" . $teacher_id . "</option>";}
	echo "</select></div><br>";
    echo "<input type='submit' class='btn btn-primary' value=Update></form>";
	echo "</div>";
	echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'></script>";
    echo "</body>";
    echo "</html>";
mysqli_free_result($result);
mysqli_close($conn);
?>
