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
        <a href="profile.php"><div class="display-picture"></div></a>
            <h class="display-name">$Moses Uche</h>
            <h class="display-name">$Student-id</h>
            <hr class="tab-hr">
            
                <div class="sidebar">
                    <a class="nav-link" href="dashboard.php"> Dashboard</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="results.php"> Results</a>
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

                <a style="text-decoration: none;" href="co-teachers-list.php">
                    <div class="tab-nav" >
                        <h2 class="tab-nav-head">Teachers</h2>
                        <p class="tab-nav-paragraph">View my co-teachers</p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
                
                <a style="text-decoration: none;" href="results.php">
                    <div class="tab-nav" >
                        <h2 class="tab-nav-head">Upload Students Results</h2>
                        <p class="tab-nav-paragraph">Upload and view students results</p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
                <a style="text-decoration: none;" href="#">
                    <div class="tab-nav">
                        <h2 class="tab-nav-head">Notifications</h2>
                        <p class="tab-nav-paragraph">Upcoming events</p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
                <a style="text-decoration: none;" href="student-list.php">
                    <div class="tab-nav" >
                        <h2 class="tab-nav-head">List of my students</h2>
                        <p class="tab-nav-paragraph">Add and Get list of students</p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
                
                <a style="text-decoration: none;" href="#">
                    <div class="tab-nav" >
                        <h2 class="tab-nav-head"></h2>
                        <p class="tab-nav-paragraph"></p>
                        <p class="tab-nav-link"></p>
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