<?php
session_start();
$username=$_SESSION['username'];
include("databaseconn.php");

mysqli_select_db($conn,'wp project');

if (isset($_SESSION['logged_in'])== true) {

$name=mysqli_real_escape_string($conn, $_POST['coursename']);
$code=mysqli_real_escape_string($conn, $_POST['code']);
$sem=$_POST['sem'];
$fac1=$_POST['fac1'];
$fac2=$_POST['fac2'];
$fac3=$_POST['fac3'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$t1=$_POST['t1'];
$t2=$_POST['t2'];
$l1=$_POST['l1'];
$l2=$_POST['l2'];
$p=$_POST['p'];
$credit=$_POST['credits'];
//Updating course table.
$sql= "insert into course(CODE,NAME,SEM,CREDITS,QUIZ1,QUIZ2,TEST1,TEST2,LAB1,LAB2,PROJECT,SEC_A_FAC,SEC_B_FAC,SEC_C_FAC) values ('$code','$name','$sem','$credit','$q1','$q2','$t1','$t2','$l1','$l2','$p','$fac1','$fac2','$fac3');";

if(mysqli_query($conn,$sql))
{
    echo "Records added into course table.";
}
else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}

//Updating acdemic table
$query = "SELECT USN, SEC FROM student WHERE SEM=$sem";
echo "<br/>$query";
$result = mysqli_query($conn,$query);
if($result)
{
    echo "Records fetched from student table.";
}
else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}
while($row = mysqli_fetch_array($result)){ 
    $usn = $row['USN'];
    $sec = $row['SEC'];
    $query_aca = "INSERT INTO academic(USN,SEM,SEC,COURSE_ID) values ('$usn','$sem','$sec','$code');";
    mysqli_query($conn,$query_aca);
    
}

$error = mysqli_error($conn);
if($error)
{
    echo "<script type='text/javascript'>";
    echo "alert('ERROR: Could not execute the query.')";
    echo "</script>";
}
else
{
    echo "Records added to academic table<br/>";
}

function faculty_add($fac, $sec)
{
    global $conn;
    global $code;
    $query = "SELECT * FROM faculty WHERE NAME='$fac';";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        echo "Records fetched from faculty table.";
    }
    else
    {
        echo "ERROR: Could not execute $query. " . mysqli_error($conn);
    }
    
    $row = mysqli_fetch_array($result);
    if(!$row['Course1_ID'])
    {
        $id = $row['ID'];
        $query = "UPDATE faculty SET `Course1_ID`='$code', `Course1_Sec`='$sec' WHERE `ID` = '$id'";
        echo "<br/>".$query;
        if(mysqli_query($conn,$query))
        {
            echo "<br>1...Records added into faculty table.";
        }
        else{
            echo "<br>ERROR: Could not execute $query. " . mysqli_error($conn);
        }
        
    }
    
    else if(!$row['Course2_ID'])
    {
        $id = $row['ID'];
        $query = "UPDATE faculty SET `Course2_ID`='$code', `Course2_Sec`='$sec' WHERE `ID` = '$id'";
        if(mysqli_query($conn,$query))
        {
            echo "<br>2...Records added into faculty table.";
        }
        else{
            echo "ERROR: Could not execute $query. " . mysqli_error($conn);
        }
        
    }
    
    else
    {
        $id = $row['ID'];
        $query = "UPDATE faculty SET `Course3_ID`='$code', `Course3_Sec`='$sec' WHERE `ID` = '$id'";        if(mysqli_query($conn,$query))
        {
            echo "<br>3...Records added into faculty table.";
        }
        else{
            echo "<br>ERROR: Could not execute $query. " . mysqli_error($conn);
        }
        
    }
}

faculty_add($fac1,'A');

faculty_add($fac2,'B');

faculty_add($fac3,'C');

header("Location: http://localhost/project/admin_course.php?course=$course_code&sem=$sem&sec=$sec");


/*echo "<script type='text/javascript'>";
echo "alert('data input done')";
echo "</script>";*/
mysqli_close($conn);
}
else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}

?>