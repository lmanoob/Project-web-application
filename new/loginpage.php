<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,108,1) 52%, rgba(0,212,255,1) 100%);
        }
        h2,h3{
            color: white;
            font-family: sans-serif;
        }
        .tab {
            overflow: hidden;
            border: none;
        }

        .tab button {
        float: center;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
        }

        .tab button:hover {
        background-color: #ddd;
        }

        .tab button.active {
        background-color: #ccc;
        }

        .tabcontent {
        display: none;
        padding: 6px 12px;
        border: none;
        }
        .input{
            width: 30%;
  			padding: 5px 20px;
  			margin: 8px 0;
  			box-sizing: border-box;
  			border: none;
  			border-bottom: 2px solid red;
        }
        .button{
  			background-color: #4CAF50; /* Green */
  			border: none;
  			color: white;
  			padding: 10px 32px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 12px;
		}
        </style>
        </head>
        <body>

        <h2>Student Management System</h2>
        <h3>Login</h3>

        <div class="tab">
            <button class="tablinks" onclick="loginfor(event, 'teacher')">Teacher</button>
            <button class="tablinks" onclick="loginfor(event, 'student')">Student</button>
        </div>

        <div id="teacher" class="tabcontent">
            <form action="teacherlogin.php" method="post">
                <label for="id">Teacher ID</label>
                <br>
                <input class="input" type="text" placeholder="Enter Teacher ID" name="id">
                <br>
                <label for="password">Password</label>
                <br>
                <input class="input" type="password" placeholder="Enter Password" name="password">
                <br>
                <button class="button" name="teacherlogin">Login</button>
                <a href="register teacher.php"><input name="registeration" class="button" type="button" value="Register"></a>
            </form>
        </div>

        <div id="student" class="tabcontent">
            <form action="login.php" method="post">
                <label for="id">Student ID</label>
                <br>
                <input class="input" type="text" placeholder="Enter Student ID" name="id">
                <br>
                <label for="password">Password</label>
                <br>
                <input class="input" type="password" placeholder="Enter Password" name="password">
                <br>
                <button class="button" name="login">Login</button>
                <a href="register.php"><input name="registeration" class="button" type="button" value="Register"></a>
            </form>
        </div>

        <script>
        function loginfor(evt, login) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(login).style.display = "block";
        evt.currentTarget.className += " active";
        }
        </script>
   
</body>
</html> 
