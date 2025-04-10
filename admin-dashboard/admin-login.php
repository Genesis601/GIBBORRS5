<?php session_start(); ?>

 
 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="admin-login.css">
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
     Admin Login
    </h2>
    <div class="sign-up-container">
    <?php if (!empty($_SESSION['error'])): ?>
    <p style="color:red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
  <?php endif; ?>
            <form  action="authentication.php" method="POST">
 
                    <input type="text" class="sign-up-input-box  " placeholder="Username" name="username" required>
                    <input type="password" class="sign-up-input-box " placeholder="Password" name="password"  required>
                    <p class="Already-signup">Do not have an Account <a href="#">Register here</a></p>

                    <input value="Login" type="submit" name="login" class="register-btn">
                    <br><br>

                    <p class="Already-signup"> <a href="../login.php">Teachers/students Login</a></p>

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