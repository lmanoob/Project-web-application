<?php
	include 'conn.php';
	session_start();
    $id = $_SESSION['student_id'];// set $id to the student_id that is stored in the session
?>
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
        height:400px;
        background-position: center;
        background-size: cover; /*Background image will cover the whole page*/
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
    <?php include "./header.html" ?>  <!--header for navbar-->
    <div class="row justify-content-around mx-auto pt-5">
        <div class="col-lg-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Profile</h5>
              <a href="studentprofile.php" class="btn btn-dark">View</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Class Registration</h5>
              <a href="register_class.php" class="btn btn-dark">Register</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-around mx-auto pt-5">
        <div class="col-sm-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Registered Class</h5>
              <a href="viewownclass.php" class="btn btn-dark">View</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-white bg-info mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Registered Subject</h5>
              <a href="viewownsubject.php" class="btn btn-dark">View</a>
            </div>
          </div>
        </div>
      </div>
	  <!--link to implement javascript bootsrtap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
