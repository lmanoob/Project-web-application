<?php
	include 'conn.php';
	session_start();
    $id = $_SESSION['student_id'];
?>
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
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Student Management System</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="home_student.php">Home</a>
            <a class="nav-link" href="studentprofile.php">Profile</a>
            <a class="nav-link" href="register_class.php">Class Registration</a>
            <a class="nav-link" href="viewownclass.php">Registered Class</a>
            <a class="nav-link" href="viewownsubject.php">Registered Subject</a>
            <a class="nav-link" href="loginpage.php">Log out</a>
          </div>
        </div>
      </div>
    </nav>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
