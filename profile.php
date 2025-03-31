
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
            <p class="list-head">Profile </p>
            

            
    <?php


$dbhost = 'localhost';
$dbname = 'gibbors schools'; 
$dbuser = 'root';
$dbpass = ''; 

try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}

$q = $pdo->prepare("SELECT First, Last, Email, Teacher, Address, Current FROM teachers where Teacher =?");
$q->execute();
$result = $q->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    
    echo '<h3 class="profile-detail-head"> Firstname:</h3>'.
    '<P>'. $row['First'] . '</P>'
    ;

    echo '<h3> Lastname:</h3>'.
    '<P>' . $row['Last'] . '</P>';

    echo '<h3>Email:</h3>'.
    '<P>' . $row['Email'] . '</P>';

    echo "<h3 class='profile-detail-head' >Teachers ID:</h3>".
     '<P>' . $row['Teacher'] . '</P>';

    echo '<h3>Address:</h3>'.
    '<P>' . $row['Address'] . '</P>';

    echo '<h3>Class presently teaching:</h3>'.
    '<P>' . $row['Current'] . '</P>';
    
}

?>
        <div><button class="list-btn" ><a class="list-btn"  href="">Edit profile</a></button></div>
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