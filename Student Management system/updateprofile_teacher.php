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
	session_start();
	include 'conn.php';
	include "./header_teach.html";
	$id= $_SESSION['teacher_id'];
    $result = mysqli_query($conn, "SELECT * from teacher where teacher_id='$id'");
    $row = mysqli_fetch_row($result);
	echo "<div id='kotak-tengah'>";
    echo "<form action=updateprof_teacher.php?id=$row[0] method=post>";
	
	echo "<div class=mb-3>";
    echo "<label for='id' class=form-label>Teacher ID:</label>"; 
    echo "<input type='text' class=form-control name='id' value='$row[0]' disabled>";
    echo "</div>";
	
	echo "<div class=mb-3>";
    echo "<label for='firstname' class=form-label>Firstname: </label>"; 
    echo "<input type='text' class=form-control name='firstname' value='$row[1]'>";
    echo "</div>";
	
	echo "<div class=mb-3>";
    echo "<label for='lastname' class=form-label>Lastname: </label>"; 
    echo "<input type='text' class=form-control name='lastname' value='$row[2]'>";
    echo "</div>";
		
	echo "<div class=mb-3>";
    echo "<label for='email' class=form-label>Email: </label>"; 
    echo "<input type='text' class=form-control name='email' value='$row[3]'>";
    echo "</div>";
	
	echo "<div class=mb-3>";
    echo "<label for='password' class=form-label>Password: </label>"; 
    echo "<input type='password' class=form-control name='password' value='$row[4]'>";
    echo "</div>";
	
	echo "<div class=mb-3>";
    echo "<label for='phone' class=form-label>Phone Number: </label>"; 
    echo "<input type='text' class=form-control name='phone' value='$row[5]'>";
    echo "</div>";
		
    echo "<input type='submit' class='btn btn-primary' value='UPDATE'></form>";
	echo "</div>";
    echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'></script>";
    echo "</body>";
    echo "</html>";
    mysqli_free_result($result);
    mysqli_close($conn);
?>
