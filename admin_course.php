<html>
<head>
    <title>Course List</title>
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
    
    <div class="fac_tab_button">
    <div class="title">COURSE LIST</div>
    
    <?php include 'admin_course_query.php';?>
    
    <button class="add" onclick="location.href='admin_course_inputForm.php';">Add Course</button>

    </div>
    
<div class="delete_form" style="margin: 100px auto;padding: 75px 100px;width: 300px; float:none; text-align:center;">
    <form action="admin_course_delete.php" method="post" id="delete" >
        <label for="id"> Enter Course Code to delete: 
        <input type=text name='code' style="margin-top:10px;"/>
        </label>
        
        <input type="submit" value="Delete"/>
    
    </form>
</div>
    
    
    
</body>
</html>


