<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
  header("Location: admin-login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/e0d5791c9a.js" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-dashboard.css">
    <title>Dashboard template</title>
</head>
<body style="margin: 0;">
    <div class="dashboard-main-grid">
        <div class="menu-grid">
            <div class="display-picture"></div>
            <h class="display-name">$Moses Uche</h>
            <h class="display-name">$Student-id</h>
            <hr class="tab-hr">
            
                <div class="sidebar">
                    <a class="nav-link" href="dashboard-template.html"> Home</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="#clients">Profile</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="#contact"> Notifications</a>
                    <hr class="nav-hr">
                  </div>
            
           
        </div>


        <div class="tab-grid">
            <h class="tab-grid-heading">Admin Dashboard </h>
            <a href="logout.php" class="tab-href">Logout</a>
            

            <hr class="tab-hr">
            <h class="tab-school-name">GIBBORS HUB SCHOOLS, Zaria</h>

            <div class="tab-sub-grid">
                <a style="text-decoration: none;" href="admin-staff.html">
                    <div class="tab-nav" >
                        <h2 class="tab-nav-head"> Academic Staffs</h2>
                        <p class="tab-nav-paragraph">Manage academic staffs records</p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
                
                <a style="text-decoration: none;" href="#">
                    <div class="tab-nav" >
                        <h2 class="tab-nav-head">Non Academic staffs</h2>
                        <p class="tab-nav-paragraph">Manage Non Academic staffs record</p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
                <a style="text-decoration: none;" href="#">
                    <div class="tab-nav">
                        <h2 class="tab-nav-head">Notifications</h2>
                        <p class="tab-nav-paragraph">Post upcoming events and Notifications</p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
                <a style="text-decoration: none;" href="#">
                    <div class="tab-nav">
                        <h2 class="tab-nav-head">Manage messages from Parents/Guardians</h2>
                        <p class="tab-nav-paragraph">View and reply messages from  Parents/Guardians </p>
                        <p class="tab-nav-link">Reveal</p>
                    </div>
                </a>
                <a style="text-decoration: none;" href="#">
                    <div class="tab-nav">
                        <h2 class="tab-nav-head">Manage Gallery</h2>
                        <p class="tab-nav-paragraph">Enter to add or delete photo/video to/from Gallary page. </p>
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
