<?php

// if(isset($_GET['id'])){
//     $userID = $_GET['id'];

//     $query = "DELETE id FROM gestion2 WHERE id = '$userID'";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <!-- <h1><a href="./students.php">Back</a></h1> -->
    <?php
        require_once "dbconnexion.php";

        if(isset($_GET['id'])){
            $userID = $_GET['id'];

        $query = "DELETE FROM gestion2 WHERE id = '$userID'";
        $result = mysqli_query($conn, $query);

            if(!$result || $result < 1){
                $error_message = "Sorry! User dos not exist inour database!";
            }
            else{
                $success_message =  "User has benn deleted successfully!";
            }
        }

    ?>

<div class="error_message" style="width:60%;color:red; display: grid; grid-template-columns:repeat(2,1fr); gap:10px;text-align:center;padding:0.5rem; margin:5rem auto;display:block;">
    <?php
        if(isset($error_message)){
            echo $error_message.'<br>';
        }
    ?>

    <?php
        if(isset($success_message)){
            echo "<div class='success_message' style='width:100%;color:green;background-color:#80fa8063;text-align:center; margin-top:0.1rem;display:block;padding:0.7rem;'>$success_message </div>";
        }
    ?>
     <a href="./students.php" >Go Back</a>

    </div>
   
</body>
</html>