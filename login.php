<?php
    $con = mysqli_connect("localhost", "root", "") or die ("Unable to connect");
    mysqli_select_db($con, "studentmanagementsystem");
?>
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
        header('location:loginpage.php');
    }
}
?>
