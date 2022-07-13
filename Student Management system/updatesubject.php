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
 <script>
     function validateform()
{
	var SuCode= document.register.SuCode.value;
	var SuName= document.register.SuName.value;
	var SuDescript= document.register.SuDescript.value;
	var credit= document.register.credit.value;
	
	if(SuCode=null||SuCode=="")
	{
		alert("Subject Code can't be blank");
		return false;
	}
	else if(SuName=null||SuName=="")
	{
		alert("Subject Name can't be blank");
		return false;
	}
	else if(SuDescript=null||SuDescript=="")
	{
		alert("Subject Description can't be blank");
		return false;
	}
	else if(credit=null||credit=="")
	{
		alert("Subject Credit can't be blank");
		return false;
	}
}
    </script>
  </head>
<body>
<?php
include 'conn.php';
$subject_code = $_GET['subject_code'];
include "./header_teach.html";
//send sql statement to the database
$result = mysqli_query($conn, "select * from subject
where subject_code='$subject_code'");
//display the output
$row = mysqli_fetch_row($result);
    echo "<div id='kotak-tengah'>";
     echo "<form name='register' onsubmit='return validateform()' action=update_processsubject.php?subject_id=$row[0] method=post>";
    
    echo "<div class=mb-3>";
    echo "<label for='SuCode' class=form-label>Subject Code:</label>"; 
    echo "<input type='text' class=form-control name='SuCode' value='$row[0]'>";
    echo "</div>";
    
    echo "<div class=mb-3>";
    echo "<label for='SuName' class=form-label>Subject Name:</label>"; 
    echo "<input type='text' class=form-control name='SuName' value='$row[1]'>";
    echo "</div>";
    
    echo "<div class='form-floating'>";
    echo "<textarea class='form-control' name='SuDescript' placeholder='Put Description here' id='floatingTextarea'  value='$row[2]'></textarea>";
    echo "<label for='floatingTextarea'>Subject Description:</label>";
    echo "</div>";

    echo "<div class=mb-3>";
    echo "<label for='credit' class=form-label>Subject Credit:</label>"; 
    echo "<input type='number' class=form-control name='credit' value='$row[3]'>";
    echo "</div>";
    
    echo "<input type='submit' class='btn btn-primary' value='UPDATE'></form>";
    echo "</div>";
    echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'></script>";
    echo "</body>";
    echo "</html>";

//clear the result & close the connection to the database
mysqli_free_result($result);
mysqli_close($conn);
?>
