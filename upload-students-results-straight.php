<?php
          
          $dbhost = 'localhost';
          $dbname = 'gibbors schools';
          $dbuser = 'root';
          $dbpass = ''; 

          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
              $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch (PDOException $exception) {
              echo "Connection error: " . $exception->getMessage();
          }
          
          $q = $pdo->prepare("SELECT Surname , Firstname FROM students where identityy = ?");
          $q->execute([$StudentID]);
          $result = $q->fetchAll(PDO::FETCH_ASSOC);
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
            <p class="list-head">Enter scores </p>

            <div>
               <h2>Get student name</h2>
                <p  class="view-p">Enter Scores</p>
                <div class="subject">
                   <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                   <option  value="">select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total"  >
                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div>
                <div class="subject">
                <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                <option  value=""> Select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total" >
                                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div >
                <div class="subject">
                <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                <option  value="">Select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total" >
                                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div>
                <div class="subject">
                <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                <option  value="">Select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total" >
                                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div>
                <div class="subject">
                <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                <option  value="">Select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>                    <input class="subject-inputs" type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total" >
                                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div>
                <div class="subject">
                <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                <option  value="">Select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total" >
                                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div>
                <div class="subject">
                <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                <option  value="">Select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>                    <input class="subject-inputs" type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total" >
                                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div>
                <div class="subject">
                <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                             <option  value="">Select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>                    <input class="subject-inputs" type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total" >
                                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div>
                <div class="subject">
                <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                           <option  value="">Select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>                    <input class="subject-inputs" type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total" >
                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div>
                <div class="subject">
                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                            <option  value="">Select Subject(Default)</option>

                          <option  value="Maths">Maths</option>
                          <option  value="English Language">English Language</option>
                          <option  value="Civic Education">Civic Education</option>
                          <option  value="Basic Science">Basic Science</option>
                          <option  value="Agric Science">Agric Science</option>
                          <option  value="Computer Science">Computer Science</option>
                          <option  value="Home Economics">Home Economics</option>
                          <option  value=""></option>
                          <option  value="Basic Science"></option>
                        </select>                    <input class="subject-inputs" type="number" id="math" name="math" placeholder="1st CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math" placeholder="2ND CA" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Exams" >
                    <input class="subject-inputs"  type="number" id="math" name="math"  placeholder="Total" >
                    <select class="subject-inputs-remark" name="remark" placeholder="Remark" >
                          <option  value="Excellent">Excellent</option>
                          <option  value="Very Good">Very Good</option>
                          <option  value="fair">Fair</option>
                          <option  value="Poor">Poor</option>
                        </select>

                </div>
                
                
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