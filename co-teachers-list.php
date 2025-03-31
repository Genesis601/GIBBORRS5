
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
            <p class="list-head">My co-Teachers </p>
            

            
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

$q = $pdo->prepare("SELECT First, Last, phone,  Address, Current FROM teachers");
$q->execute();
$result = $q->fetchAll(PDO::FETCH_ASSOC);

echo '<table class="student_tbl">';
echo '<tr>
<th>Present class</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Phone number</th>
<th>Address</th>

</tr>';
foreach ($result as $row) {
    echo '<tr>';
    echo '<td>' . $row['Current'] . '</td>';
    echo '<td>' . $row['First'] . '</td>';
    echo '<td>' . $row['Last'] . '</td>';
    echo '<td>' . $row['phone'] . '</td>';
    echo '<td>' . $row['Address'] . '</td>';
   
    echo '</tr>'; 
}
echo '</table>';
?>
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