<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-template.css">
    <title>Dashboard template</title>
</head>
<body style="margin: 0;">
<div class="logo-div"><img src="project pics/Logo.png" class="logo"></div>

    <div class="dashboard-main-grid">
        <div class="menu-grid">
        <a href="profile.php">
            <div class="display-picture"></div></a>
            
            <h class="display-name">$Moses Uche</h>
            <h class="display-name">$Student-id</h>
            <hr class="tab-hr">
            
                <div class="sidebar">
                    <a class="nav-link" href="dashboard.php"> Dashboard</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="#services"> Results</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="profile.php">Profile</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="#contact"> Notifications</a>
                    <hr class="nav-hr">
                  </div>
            
           
        </div>


        <div class="tab-grid">
            <h class="tab-grid-heading">Teachers Dashboard </h>
            <a href="logout.php" class="tab-href">Logout</a>
            <hr class="tab-hr">
            <h class="tab-school-name">GIBBORS HUB SCHOOLS, Zaria</h>
            <p class="tab-welcome">Welcome Great teachers </p>

            <div class="tab-sub-grid">

                <a style="text-decoration: none;" href="display-student-list.php">
                    <div class="tab-nav" >
                        <h2 class="tab-nav-head">Get List of Students</h2>
                        <p class="tab-nav-paragraph">View list of your students</p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
                
                <a style="text-decoration: none;" href="add-student.php">
                    <div class="tab-nav" >
                        <h2 class="tab-nav-head">Add student</h2>
                        <p class="tab-nav-paragraph">Add and update student details </p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
               
              
                
               
            </div>
        </div>

    </div>

    <hr class="footer-hr">
  <div>
    <p class="footer-company"> Design by <span style="color:blue;">Vixtool Developers</span></p>
  </div>
 

    <script src="dashboard-template.js"></script>
</body>
</html>