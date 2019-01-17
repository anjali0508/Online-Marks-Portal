<?php
    include("databaseconn.php");
session_start();
if(isset($_POST['fac_login'])){
    mysqli_select_db($conn,'wp project');
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $userpwd=mysqli_real_escape_string($conn,$_POST['userpwd']);
    $sql="SELECT count(*) as cntUser from faculty WHERE ID='$username' and PASSWORD='$userpwd';";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=$row["cntUser"];
    if($count==1){
        $_SESSION['logged_in']=true;
        $_SESSION['username']=$username;
        if($_SESSION['username']=='admin123')
        {
            header("Location: http://localhost/project/admin_home.php");
        }
        else{
        header("Location: http://localhost/project/faculty_home.php");
        }
    }
    else{
        echo "YOUR login or password is invalid";
    }
}
if(isset($_POST['stu_login'])){
    mysqli_select_db($conn,'wp project');
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $userpwd=mysqli_real_escape_string($conn,$_POST['userpwd']);
    $sql="SELECT count(*) as cntUser from student WHERE USN='$username' and PASSWORD='$userpwd';";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=$row["cntUser"];
    if($count==1){
        $_SESSION['logged_in']=true;
        $_SESSION['username']=$username;
        header("Location: http://localhost/project/student_home.php");
    }
    else{
        echo "YOUR login or password is invalid";
    }
    
}
?>


