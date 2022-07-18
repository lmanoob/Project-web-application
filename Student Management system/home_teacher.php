<?php
	include 'conn.php';
	session_start();
	$id = $_SESSION['teacher_id'];
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--this the css for the design-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
    <style>
      body{
        background-image: url("Image/background.jpg"); /*implementation of the image*/
        background-color: aquamarine;
        height:400px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
  <?php include "./header_teach.html" ?> 
  <div class="row justify-content-around mx-auto pt-5">
        <div class="col-sm-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Profile</h5>
              <a href="teacherprofile.php" class="btn btn-dark">View</a>  <!--view profile-->
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Class Teached</h5>
              <a href="teach_class.php" class="btn btn-dark">View</a> <!--view class teached-->
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Subject Teached</h5>
              <a href="teach_subject.php" class="btn btn-dark">View</a> <!--view subject teached-->
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-around mx-auto pt-5">
        <div class="col-sm-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Subject List</h5>
              <a href="subjectlist.php" class="btn btn-dark">View</a> <!--view subject list-->
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Student List</h5>
              <a href="studentlist.php" class="btn btn-dark">View</a> <!--view student list--> 
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Class List</h5>
              <a href="classlist.php" class="btn btn-dark">View</a> <!--view classlist-->
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> //bootstratp css
  </body>
</html>
