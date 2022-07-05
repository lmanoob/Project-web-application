<?php
	include 'conn.php';
	session_start();
	$id = $_SESSION['teacher_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <style>
        body{
            text-align:center;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(95,9,121,1) 100%, rgba(0,212,255,1) 100%);
        }
        h1{
            color:white;
            font-family: sans-serif;
        }
        a:link, a:visited {
        background-color: #f44336;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        }

        a:hover, a:active {
        background-color: red;
        }
    </style>
    <body>
        <H1>Student Management System</H1>
		<a href=teacherprofile.php>View Profile</a>
        <a href=teach_class.php>My Classes</a>
        <a href=teach_subject.php>My subjects</a>
        <a href=subjectlist.php>Subject List</a>
		<a href=studentlist.php>Student List</a>
    </body>
</html>
