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
        <form action="login.php" method="post">
            Student ID: <input type="text" name="id">
            Password: <input type="password" name="password">
            <button name="login">Login</button>
            <a href="register.php"><input name="registeration" type="button" value="Register"></a>
        </form>
<?php
if(isset($_POST['login']))
{
    $id = $_POST['id'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM student WHERE student_id='$_POST[id]' AND student_password='$_POST[password]'";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['student_id']=$_POST['id'];
        header('location:home.php');
    }
    else
    {
        echo "<script type'text/javascript'>alert('Invalid Student ID or password!')</script>";  
    }
}
?>
    </body>
</html>
