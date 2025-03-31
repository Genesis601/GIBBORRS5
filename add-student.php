<?php 
ob_start();
session_start();

// Include the database connection file
include 'teachers-form-conn.php';


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Surname = $_POST['surname'];
    $Firstname = $_POST['firstname'];
    $studentID = $_POST['students-ID'];
    $Contact = $_POST['contact'];
    $Gender = $_POST['gender'];

    $Contact = filter_var($Contact, FILTER_SANITIZE_STRING); 

  

     // Insert user into the database
     $sql = "INSERT INTO students (Surname, Firstname, Identityy, Contact,  Gender) VALUES (?, ?,  ?, ?, ?)";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("sssss" ,$Surname, $Firstname,  $studentID,$Contact,$Gender);
 

     if ($stmt->execute()) {
       echo "Student added Successfully";
      } else {
       echo "Error: " . $stmt->error;
       }

   $stmt->close();
   $conn->close();
   

 }

?>
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
            <p class="list-head">Add student </p>


            <div class="tab-sub-grid">

            <div>
                  <form action="add-student.php" method="POST" >
                  <label class="add-student-label"> Surname:
                      <input class="add-student-inputs" type="text" name="surname" required> 
                  </label>
                  <label class="add-student-label"> Firstname:
                      <input class="add-student-inputs" type="text" name="firstname" required> 
                  </label>
                  <label class="add-student-label"> Students ID:
                      <input class="add-student-inputs" type="text" name="students-ID" required> 
                  </label>
                  <label class="add-student-label"> Guardians/Parents Telephone:
                      <input class="add-student-inputs" type="tel" name="contact" required> 
                  </label>

                  <label class="add-student-label">Gender:</label><br>
                      <select class="add-student-inputs" name="gender" >
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>

                     <input class="add-student-submit" type="submit" name="submit" value="Add" required> 
             </form>
  </div>

  <div><button class="list-btn" ><a class="list-btn"  href="display-student-list.php">Get List of my students</a></button></div>

               
              
                
               
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