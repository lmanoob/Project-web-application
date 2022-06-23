<!DOCTYPE html>
<html>
<head>
    <head>
        <title>Student Management System</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


    </head>
    <body class="p-3">
        <form name ="Student" method ="POST" action="studentdb.php">
            <div class ="container">
                <div class ="row">
                
                <div class = "col-sm-4">
                <h2 class ="bg-secondary font-weight-bold text-white"><b> Login</b></h2>
                <hr class="mb-3">
	<h4> Enter your credentials:</h4>
    <table border=20 class="btn-secondary display-5 font-weight-bold">
        <tr><td>ID: </td><td><input name="student" type="text" size= 50></td></tr>
        <tr><td>Password:</td><td><input name= "password" type="text" size=10></td></tr>
        <tr><td>Login as:</td><td> <select name ="state" id="stateid" style= "width: 200px; margin: 2px;
        text-align:right">
	<option value = "Johor">Teacher</option>
	<option value = "Melaka">Student</option>
	</select>
</td></tr> 

            

	<br><br>
	<input type="button" value="Login" onclick= "doSubmit()">
	<input type="reset" value="Clear Enteries" >
    <br><br>


</table>
</form>
</body>
</html>
