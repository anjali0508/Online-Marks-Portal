<html>
<head>
<title>Student List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
    <link rel="stylesheet" type="text/css" href="admin_design.css">

</head>
<body>
    <div id="fixed">
        <ul>
        <li><a href="logout.php">Log Out</a></li>
        <li><a href="admin_home.php">Home</a></li>
        </ul>
    </div>
    
    <div class="header">
        <img src="BMS_College_of_Engineering.svg" class="logo"/>
        <h1>BMSCE<br/>
        DEPARTMENT OF COMPUTER SCIENCE</h1>
    </div>
    <div class="title"> STUDENT LIST</div>
    
    <div class="tab_button">
    <?php include 'admin_student_query.php';?>  
    
    <button class="add" onclick="location.href='admin_student_inputForm.php';">Add Student</button>

    </div>
    
    <div class="delete_form">
    <form action="admin_student_delete.php" method="post" id="delete" >
        <label for="id"> Enter Student USN to delete: 
        <input type=text name='code'/>
        </label>
        
        <input type="submit" value="Delete"/>
    
    </form>
    </div>
    
</body>
</html>

