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
        background-size: cover;/*Background image will cover the whole page*/
        background-repeat: no-repeat;
      }
	/* Css to put the content into the middle */
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
	session_start();
	include 'conn.php';
	include "./header_teach.html";//header for navbar
	
	$result=mysqli_query($conn, "SELECT * FROM class");
	$result1 = mysqli_query($conn, "SELECT subject_code FROM subject"); 
	$result2 = mysqli_query($conn, "SELECT teacher_id FROM teacher");
	$row = mysqli_fetch_row($result);
	$row1 = mysqli_fetch_row($result1);
	$row2 = mysqli_fetch_row($result2);
	echo "<div id='kotak-tengah'>";
	echo "<form action=add_classprocess.php method =post>";
	
	echo "<div class=mb-3>";
    echo "<label for='classcode' class=form-label>Class Code:</label>"; 
    echo "<input type='text' class=form-control name='classcode'>";
    echo "</div>";
	
	echo "<div class=mb-3>";
    echo "<label for='classname' class=form-label>Class Name:</label>"; 
    echo "<input type='text' class=form-control name='classname'>";
    echo "</div>";
	
	echo "<div class=mb-3>";
    echo "<label for='NoS' class=form-label>Number of Student:</label>"; 
    echo "<input type='text' class=form-control name='NoS'>";
    echo "</div>";
	
	echo "<div class=mb-3>";
	echo "<label for='subject_code'>Pick the subject code:</label><br>";
	echo "<select class='form-select' aria-label='Default select example' name='subject_code'>";
	echo "<option selected>Pick the Subject Code</option>";
	//Make a sql data as a drop down option in this case the subject_code from table subject
	foreach( $result1 as $row1){
			$subject_code=$row1['subject_code'];
			echo "<option value=".$subject_code.">" . $subject_code. "</option>";}
	echo "</select><br>";
	
	echo "<div class=mb-3>";
	echo "<label for='teacher_id'>Assign a teacher:</label><br>";
	echo "<select class='form-select' aria-label='Default select example' name='teacher_id'>";
	echo "<option selected>Pick the Teacher ID</option>";
	//Make a sql data as a drop down option in this case the teacher_id from table teacher
	foreach( $result2 as $row2 ){
			$teacher_id=$row2['teacher_id'];
			echo "<option value=".$teacher_id.">" . $teacher_id . "</option>";}
	echo "</select></div><br>";
	echo "<input type='submit' class='btn btn-primary' value=Register></form>";
	echo "</div>";
	echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'></script>";
    echo "</body>";
    echo "</html>";
mysqli_free_result($result);
mysqli_close($conn);
?>
