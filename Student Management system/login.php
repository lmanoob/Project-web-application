<?php
    $con = mysqli_connect("localhost", "root", "") or die ("Unable to connect"); //connecting to the localhost for the login process
    mysqli_select_db($con, "studentmanagementsystem"); //the database
    session_start();
?>
<?php
if(isset($_POST['login']))
{
    $id = $_POST['id'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM student WHERE student_id='$_POST[id]' AND student_password='$_POST[password]'"; //the password from the student side to verify

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['student_id']=$_POST['id'];
        header('location:home_student.php');
    }
    else
    {
        echo "<script type'text/javascript'>alert('Invalid Student ID or password!')</script>";  // error message if there is no matchable ids or pass
    }
}
?>
