<?php



// Include the database connection file
include 'teachers-form-conn.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Teachers_ID = $_POST["TeachersID"];
    $password = $_POST['password'];

    // Fetch user from the database
    $sql = "SELECT id, Teacher, Password FROM teachers WHERE Teacher = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",  $Teachers_ID);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $Teachers_ID, $hashed_password);


  if ($stmt->fetch()) {
        session_start();
        $_SESSION['user_id'] = $id;
        $_SESSION['TeachersID'] =  $Teachers_ID;
        echo "Login successful!";
         header('Location: dashboard.php');
    } else {
        echo "Invalid username or password.";
    } 

   
    $stmt->close();
    $conn->close();
    
} 

?>

  
 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="background-color: rgb(248, 248, 244); margin: 0;">
    <div class="logo-div"><img src="project pics/Logo.png" class="logo"></div>
    <div class="name-div"><h  class="name"> GIBBORS HUB SCHOOLS</h></div>
    <div class="nav-bar">
        <ul class="ul">
        
            <li class="li a"><a  href="project1.php">Home</a> </li>
            <li class="li a"><a href="team.php">Meet the Team</a> </li>
            <li class="li a"><a href="E-portal.php">E-Portal</a> </li>
            <li class="li a"><a href="Gallery.php">Gallery</a> </li>
            <li class="li a"><a href="Activities.php">Activities</a> </li>  
 
        </ul>
    </div>
    <h2 class="teachers-heading ">
        Teachers Login
    </h2>
    <div class="sign-up-container">
            <form  action="login.php" method="POST">
 
                    <input type="text" class="sign-up-input-box  " placeholder="Teachers ID" name="TeachersID" required>
                    <input type="password" class="sign-up-input-box " placeholder="Password" name="password"  required>
                    <p class="Already-signup">Do not have an Account <a href="#">Register here</a></p>

                    <input value="Login" type="submit" name="login" class="register-btn">
                    </div>

    <div class="footer">
        <div class="footer-grid">
            <div class="footer-about-us-container" >
                <h2 class="footer-about-us">
                    About Us
                </h2>
                <hr class="footer-hr">

                <p class="footer-about-us-writeup">The school believes in building a solid foundation for the child and as such, we strive to turn out students with passion for excellenxe and who have been adequately prepared for tertiary education and life.</p>

            </div>

            <div class="footer-grid">
                <div class="footer-about-us-container" >
                    <h2 class="footer-about-us">
                        POPULAR LINKS
                    </h2>
                    <hr class="footer-hr"><br>
    
                    <p ><a class="footer-popular-links" href="#">Gallery</a></p>
                    <p ><a class="footer-popular-links" href="#">Gallery</a></p>
                    <p ><a class="footer-popular-links" href="#">Gallery</a></p>
                    <p ><a class="footer-popular-links" href="#">Gallery</a></p>
                   
                   
    
                </div>


                <div class="footer-grid">
                    <div class="footer-about-us-container" >
                        <h2 class="footer-about-us">
                           Contact Us / Address
                        </h2>
                        <hr class="footer-hr">
        
                        <p class="footer-about-us-writeup">
                            Yankarfe, Zaria Kaduna State
                        </p>
                        <p class="footer-about-us-writeup">
                           TEL: 000 0000 0000, 000 0000 00000 <BR>
                            Email: gibbors@gmail.com
                            
                        </p>
                        
                    </div>
        </div>
    

    <div>
 <hr class="footer-hr2">

  <div>
    <p class="footer-company"> Design by <span style="color:blue;">Vixtool Developers</span></p>
  </div>  
</div>   
</body>
</html>