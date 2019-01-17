<html>
<head>
    <title>Faculty List</title>
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
    <div class="title">FACULTY LIST</div>
    
    <?php include 'admin_faculty_query.php'?>
     
    
    <button class="add" onclick="location.href='admin_faculty_inputForm.php';">Edit</button>

    </div>
    
    
</body>
</html>


