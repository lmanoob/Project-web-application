<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	//link to bootsrap to use the css
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
include 'conn.php';
include "./header_teach.html"; //header for navbar
?>
	<div id='kotak-tengah'>
        <table>
        <form action="add_subjectprocess.php" method = "post">
			<div class='mb-3'>
            <label for='SuCode' class='form-label'>Subject Code:</label>
			<input type='text' class='form-control' name='sub_code'>
			</div>
			
			<div class='mb-3'>
			<label for='sub_name' class='form-label'>Subject Name:</label>
			<input type='text' class='form-control' name='sub_name'>
			</div>
			
			<div class='form-floating'>
			<textarea class='form-control' name='sub_desc' placeholder='Put Description here' id='floatingTextarea'  value='$row[2]'></textarea>
			<label for='floatingTextarea'>Subject Description:</label>
			</div>
			
			<div class='mb-3'>
			<label for='sub_cred' class='form-label'>Subject Credit:</label></th>
			<input type='text' class='form-control' name='sub_cred'>
			</div>
			
           <input type='submit' class='btn btn-primary' value='UPDATE'>
        </form>
		<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        </table>
		</div>
    </body>
</html>
