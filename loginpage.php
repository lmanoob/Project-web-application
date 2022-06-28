<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial;}

        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        .tab button {
        background-color: inherit;
        float: left;
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
        border: 1px solid #ccc;
        border-top: none;
        }
        </style>
        </head>
        <body>

        <h2>Login</h2>

        <div class="tab">
            <button class="tablinks" onclick="loginfor(event, 'teacher')">Teacher</button>
            <button class="tablinks" onclick="loginfor(event, 'student')">Student</button>
        </div>

        <div id="teacher" class="tabcontent">
            <form action="teacherlogin.php" method="post">
            Teacher ID: <input type="text" name="id">
            Password: <input type="password" name="password">
            <button name="teacherlogin">Login</button>
            <a href="register teacher.php"><input name="registeration" type="button" value="Register"></a>
            </form>
        </div>

        <div id="student" class="tabcontent">
            <form action="login.php" method="post">
                Student ID: <input type="text" name="id">
                Password: <input type="password" name="password">
                <button name="login">Login</button>
                <a href="register.php"><input name="registeration" type="button" value="Register"></a>
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
