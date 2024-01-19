<?php
session_start();
 
    include ("dbconnexion.php");
    include ("functions.php");

    // $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirection page</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <?php
    
    if(!isset($_SESSION['useremail'])){
        header('location:connexion.php');
        exit;
    }
    $email = $_SESSION['useremail'];
    $url = 'connexion.php?useremail='.$email;
    
    ?>

    <div class="container">
        <div class="subcontainer">
            <?php
              echo  "<p style='font-size:0.88rem;'>Wellcome! </br><b>$email</b>, thanks for choosing us</p>"
            ?>
            <a href="students.php">Admin Page</a>
        </div>
    </div>

</body>

</html>