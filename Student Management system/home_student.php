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
              <a class="nav-link" href="viewownclass.php">Class</a>
              <a class="nav-link" href="viewownsubject.php">Subject</a>
            </div>
          </div>
        </div>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
