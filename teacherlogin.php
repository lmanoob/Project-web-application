<?php
    $con = mysqli_connect("localhost", "root", "") or die ("Unable to connect");
    mysqli_select_db($con, "studentmanagementsystem");
?>
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
        header('location:loginpage.php');  
    }
}
?>
