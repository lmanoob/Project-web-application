<?php
    $con = mysqli_connect("localhost", "root", "") or die ("Unable to connect");
    mysqli_select_db($con, "studentmanagementsystem");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="teacherlogin.php" method="post">
            Teacher ID: <input type="text" name="id">
            Password: <input type="password" name="password">
            <button name="teacherlogin">Login</button>
            <a href="register.php"><input name="registeration" type="button" value="Register"></a>
        </form>
<?php
if(isset($_POST['teacherlogin']))
{
    $id = $_POST['id'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM teacher WHERE teacher_id='$_POST[id]' AND teacher_password='$_POST[password]'";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['teacher_id']=$_POST['id'];
        header('location:home.php');
    }
    else
    {
        echo "<script type'text/javascript'>alert('Invalid Teacher ID or password!')</script>";  
    }
}
?>
    </body>
</html>
