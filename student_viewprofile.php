<html>
<head>
    <title>Your Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
</head>
<body>
    <div id="fixed">
    <ul>
    <li><a href="logout.php">Log Out</a></li>
    <li><a href="student_viewprofile.php">View Profile</a></li>
    <li><a href="student_home.php">Home</a></li>
    </ul>
    </div>
    
    <div class="header">
        <img src="BMS_College_of_Engineering.svg" class="logo"/>
        <h1>BMSCE<br/>
        DEPARTMENT OF COMPUTER SCIENCE</h1>
    </div>
    
 <div id='viewprofile'>
     <center><span class="title">YOUR PROFILE</span></center>
    

<?php
    include "databaseconn.php";
    session_start();

    $username = $_SESSION['username'];
    if (isset($_SESSION['logged_in'])== true) 
    {
        $query = "select * from student where USN='$username';";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){ 
            echo "<table id='viewprofile_table'>";
            echo "<tr><th>NAME</th><td>".$row['NAME']."</td></tr><tr><th>USN</th><td>".$row['USN']."</td></tr><tr><th>SEMESTER</th><td>".$row['SEM']."</td></tr><tr><th>SECTION</th><td>".$row['SEC']."</td></tr></table>";
        }
        mysqli_close($conn);
    }
     
     
    
    else{
        mysqli_close($conn);
        header("Location: http://localhost/project/login.php");
    }
    
    
    ?>
</div>
</body>
</html>