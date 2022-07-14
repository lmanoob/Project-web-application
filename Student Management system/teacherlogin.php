<?php
    $con = mysqli_connect("localhost", "root", "") or die ("Unable to connect");
    mysqli_select_db($con, "studentmanagementsystem");
    session_start();
?>
<?php
if(isset($_POST['teacherlogin']))
{
    $id = $_POST['id'];
    $password = $_POST['password'];
    //send sql statement to the database 
    $sql = "SELECT * FROM teacher WHERE teacher_id='$_POST[id]' AND teacher_password='$_POST[password]'";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['teacher_id']=$_POST['id'];
        header('location:home_teacher.php');
    }
    else
    {
                    echo '<script>language="javascript">alert("Invalid Teacher ID or password!");
          window.location.href="loginpage.php";
			</script>';
    }
}
?>
