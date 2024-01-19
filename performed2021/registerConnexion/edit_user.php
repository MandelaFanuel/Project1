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
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="edit_container">
        <div class="edit_container_principal">
        <?php
        if(isset($_GET["id"])) {
            $userID = $_GET["id"];
            $users = "SELECT * FROM gestion2 WHERE id ='$userID' limit 1";
            $result = mysqli_query($conn, $users);

            if(mysqli_num_rows($result) > 0){
                foreach($result as $user){

                }
                ?>

                    <form method="POST" class="user_form">
                        <p><h1>Editting Student</h1></p>

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
                            <label for="" style="color:blue;">New Name</label>
                            <input type="text" class="edit_user_proile" name="username" value="<?=$user['username'];?> " placeholder="Enter your New name">
                        </div>

                        <div class="user_profile_details">
                            <label for="" style="color:blue;">New Email : </label>
                            <p class="edit_user_proile"  name="useremail">
                                <?=$user['useremail'];?>
                            </p>
                        </div>

                        <div class="user_profile_details">
                            <label for="" style="color:blue;">New Password</label>
                            <input type="password" class="edit_user_proile" name="userpassword" value="<?=$user['userpassword'];?>"  placeholder="Enter your New password">
                        </div>


                       

                        <div class="proedit_container">
                            <div class="profile_addStudent">
                                <input type="submit" name="save"  value="SAVE">
                            </div>

                            <div class="profile_addStudent">
                                <h3><a href="./students.php">Cancel</a></h3>
                            </div>
                        </div>

                        <!-- <a href="./students.php"class="validationbtn" style="text-decoration: none; background-color:#ff0000a4;"></a> -->
                        
                        <div class="error_message" style="width:60%;color:red; text-align:center; margin-top:0.5rem;display:block;">
                            <?php
                                if(isset($error_message)){
                                    echo $error_message.'<br>';
                                }
                            ?>
                        </div>

                        <?php
                            if(isset($success_message)){
                                echo "<div class='success_message' style='width:100%;color:green;background-color:#80fa8063;text-align:center; margin-top:0.1rem;display:block;padding:0.4rem;'>$success_message </div>";
                            }
                        ?>
                    </form>
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