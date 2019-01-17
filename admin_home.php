<?php
session_start();
if (!isset($_SESSION['logged_in'])){
 header("Location: http://localhost/project/login.php");
} 
?>
<html>
<head>
    <title>CIE Marks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
    <link rel="stylesheet" type="text/css" href="admin_design.css">

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
    

    
    
    <div class='admin_home'>
    <button onclick="location.href='admin_faculty.php'">Faculty List</button>
        
    <button onclick="location.href = 'admin_course.php'">Course List</button>
    
    <button onclick="location.href = 'admin_student.php'">Student List</button>
        
    </div>
    
</body>

</html>