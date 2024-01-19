<?php
    include ("dbconnexion.php");
    include ("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editting</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="edit_container">

        <div class="edit_container_principal">
            <?php
            if(isset($_GET["id"])) {
                $userID = $_GET["id"];
                $users = "SELECT * FROM gestion2 WHERE id ='$userID' limit 1";
                $run = mysqli_query($conn, $users);

                if(mysqli_num_rows($run) > 0){
                    foreach($run as $user){

                    }
                    ?>
                     <div class="profile_title">
                        <h2>Your Profile</h2>
                    </div>
                  
                    <div class="profile_user_form">

                        <div class="user_profile_details">
                            <label for="" style="color:blue;">Your ID : </label>
                            <p class="edit_user_proile" >
                                <?=$user['id'];?>
                            </p>
                        </div>
                    
                        <div class="user_profile_details">
                            <label for="" style="color:blue;">Your user CODE : </label>
                            <p class="edit_user_proile">
                                <?=$user['user_id'];?>
                            </p>
                        </div>

                        <div class="user_profile_details">
                            <label for="" style="color:blue;">Name : </label>
                            <p class="edit_user_proile" >
                                <?=$user['username'];?>
                            </p>
                        </div>

                        <div class="user_profile_details">
                            <label for="" style="color:blue;">Email : </label>
                            <p class="edit_user_proile">
                                <?=$user['useremail'];?>
                            </p>
                        </div>

                        <!-- <div class="user_profile_details">
                            <label for="" style="color:blue;">New Password : </label>
                            <p class="edit_user_proile" >
                                <?=$user['userpassword'];?>
                            </p>
                        </div> -->

                        <div class="edit_container">
                            <div class="profile_addStudent">
                                <h3><a href="./home.php">Home</a></h3>
                            </div>

                            <div class="profile_addStudent">
                                <h3><a href="edit_user.php?id=<?=$user['id'];?>">Edit</a></h3>
                            </div>

                            <div class="profile_addStudent">
                                <h3><a href="./students.php">Back</a></h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    else {
                    ?>
                    <h4 style="color:red;text-align:center;margin-top:5rem;">No record found !</h4>
                    <?php
                }
            }
   
            ?>
        </div>
    </div>
</body>
</html>