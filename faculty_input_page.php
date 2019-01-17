<html>
<head>
    <title>welcomepage</title>
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
    <link rel="stylesheet" type="text/css" href="faculty_design.css">
</head>
    
<body>
    <div id="fixed">
        <ul>
        <li><a href="logout.php">Log Out</a></li>
        <li><a href="faculty_home.php">Home</a></li>
        </ul>
    </div>
    
    <div class="header">
        <img src="BMS_College_of_Engineering.svg" class="logo"/>
        <h1>BMSCE<br/>
        DEPARTMENT OF COMPUTER SCIENCE</h1>
    </div>

<?php
include("databaseconn.php");
mysqli_select_db($conn,'wp project');
session_start();
    
if (isset($_SESSION['logged_in'])== true) {

//pass values from previous page here
$course_code = $_GET['course'];
$sem = $_GET['sem'];
$sec = $_GET['sec'];

$query = "SELECT * FROM academic WHERE COURSE_ID='$course_code' AND SEM=$sem AND SEC='$sec'";

$result = mysqli_query($conn,$query);

echo "<div class='input_tab'>";

echo '<table>';

$head = "<tr><th>USN</th><th>NAME</th>";

$query1 = "SELECT * FROM course WHERE CODE='$course_code'";

$course =  mysqli_fetch_array(mysqli_query($conn,$query1));
$course_name = $course['NAME'];
echo "<span class='title'>$course_name [".$course_code."] <br/> $sem  (".$sec.")</span>";
if($course['QUIZ1']!=0)     $head.="<th>QUIZ 1</th>";
if($course['QUIZ2']!=0)     $head.="<th>QUIZ 2</th>";
if($course['TEST1']!=0)     $head.="<th>TEST 1</th>";
if($course['TEST2']!=0)     $head.="<th>TEST 2</th>";
if($course['LAB1']!=0)     $head.="<th>LAB 1</th>";
if($course['LAB2']!=0)     $head.="<th>LAB 2</th>";
if($course['PROJECT']!=0)     $head.="<th>PROJECT</th>";
$head.="</tr>";
echo $head;
echo "<form method=post action=faculty_marks_input.php?code=$course_code&sem=$sem&sec=$sec>";
while($row = mysqli_fetch_array($result)){
    $usn = $row['USN'];
    $query2 = "SELECT NAME FROM student WHERE USN='$usn'";
    $name =  mysqli_fetch_array(mysqli_query($conn,$query2));
    echo "<tr><td><input type=text name=usn[] id=usn value=".$usn." readonly ></td>";
    echo "<td><input type=text id=usn value=".$name['NAME']." readonly ></td>";
    
if($course['QUIZ1']!=0)    echo "<td><input type=text name=q1[] id=q1 value=".$row['QUIZ1']."></td>";
if($course['QUIZ2']!=0)     echo "<td><input type=text name=q2[] id=q2 value=".$row['QUIZ2']."></td>";
if($course['TEST1']!=0)     echo "<td><input type=text name=t1[] id=t1 value=".$row['TEST1']."></td>";
if($course['TEST2']!=0)     echo "<td><input type=text name=t2[] id=t2 value=".$row['TEST2']."></td>";
if($course['LAB1']!=0)     echo "<td><input type=text name=lab1[] id=lab1 value=".$row['LAB1']."></td>";
if($course['LAB2']!=0)     echo "<td><input type=text name=lab2[] id=lab2 value=".$row['LAB2']."></td>";
if($course['PROJECT']!=0)     echo "<td><input type=text name=pro[] id=pro value=".$row['PROJECT']."></td></tr>";
    
}

echo "<input type=submit value=SUBMIT> ";
echo "</form>";
echo "</table>";
echo "</div>";
mysqli_close($conn);
}
else{
    header("Location: http://localhost/project/login.php");
    mysqli_close($conn); 
}
?>    
    
    </body>
</html>