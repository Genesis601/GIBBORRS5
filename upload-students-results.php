<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gibbors schools";
if ($_SERVER['REQUEST_METHOD']== 'POST') {
  $StudentID = $_POST['studentID'];

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);	
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE  $StudentID (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  subjects VARCHAR(20) NOT NULL,
	FirstCA INT(3),
  SecondCA INT(3) ,
  Exams INT(3) ,
  Total INT(3),
  REMARKS VARCHAR(20))";
    $conn->exec($sql);

   // echo "Database is created successfully";
   header("location: upload-students-results-straight.php");
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-template.css">
    <title>Results</title>
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
            <p class="list-head">Upload Results </p>

            <div>
                <p class="view-p"> Input the ID of the student you want to upload results for below.</p>
                <form action="upload-students-results.php " method="POST">
                <input type="text" placeholder="Students ID" class="contact-us-inputs" name="studentID" required>
                
                
                
                <input type="submit" value="Upload" class="contact-us-submit" required>

                </form>
               
            </div>
            <p class="or">OR</p>
            

            <div><button class="list-btn" ><a class="list-btn"  href="view-student-result.php">View Student result</a></button></div>
  

        </div>


    </div>



    <hr class="footer-hr">
  <div>
    <p class="footer-company"> Design by <span style="color:blue;">Vixtool Developers</span></p>
  </div>
 

    <script src="dashboard-template.js"></script>
</body>
</html>

    
</body>
</html>