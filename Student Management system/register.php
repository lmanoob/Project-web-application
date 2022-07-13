<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> //css for header
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
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
         padding: 10px;
        }
    </style>
  </head>
    <body>                                         //the body of the page
        <?php include "./header_teach.html"; ?>
        <div id="kotak-tengah">
        <form action="add.php" method = "post">
        <div class="mb-3">
        <label for="id" class="form-label">Student ID:</label>
        <input type="text" class="form-control" name="id">
        </div>
        <div class="mb-3">
        <label for="firstname" class="form-label">First Name:</label>
        <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
        <label for="lastname" class="form-label">Last Name:</label>
        <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="text" class="form-control" name="password">
        </div>  
        <div class="mb-3">
        <label for="phone" class="form-label">Phone Number:</label>
        <input type="text" class="form-control" name="phone">
        </div>   
        <input type="submit" class="btn btn-primary" value="Register"> // submit the registration into the database
        </form>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
    </body>
</html>
