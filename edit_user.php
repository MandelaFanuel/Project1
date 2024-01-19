<?php
session_start();

include("dbconnexion.php");
include("functions.php");
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

        <a
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
  ></a>

          <!-- ========ION_ICONS AND GOOGLE LINKS ========-->

   <link
    href="https://fonts.googleapis.com/css2?family=Onest:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

   <!-- ======== END OF ION_ICONS AND GOOGLE LINKS ========-->
        <link rel="stylesheet" href="style.css">
    </head>

<body>
<div class="header">
        <div class="header_container">
            <div class="header_img">
                <img src="./imgs/Saitimu.jpg" alt="">
            </div>

            <div class="header_content">
                <h3><a href="./registration.php">About DAFI</a></h3>
            </div>
               
            <div class="header_content">
                <h3><a href="./registration.php">Ret</a></h3>
            </div>

            <div class="header_content">
                <h3><a href="./home.php">Fanius</a></h3>
            </div>

            <div class="header_content">
                <h3><a href="./home.php">Rapport</a></h3>
            </div>
        </div>
    </div>


    <div class="edit_container">
        <div class="edit_container_principal">
            <?php
            if (isset($_GET["id"])) {
                $userID = $_GET["id"];
                $users = "SELECT * FROM gestion2 WHERE id ='$userID' limit 1";
                $result = mysqli_query($conn, $users);

                if (mysqli_num_rows($result) > 0) {
                    foreach ($result as $user) {
                    }
                ?>

                    <form method="POST" class="update_form">
                        <!-- <div class="edit"> -->

                        <div class="backhome_edit_page">
                            <a href="home.php" ><ion-icon name="home" class="edit_homeIcon"></ion-icon></a>
                            <p><a href="home.php">Home</a></p>
                        </div>

                        <h1>Editting Student</h1>

                        <div class="profile_pic">
                            <img src="./imgs/images.jpeg" alt="">
                        </div>

                        <div class="update_forme">
                            <div class="update_infos">

                                <div class="user_profile_edit">
                                    <label for="" style="color:blue;">Your ID : </label>
                                    <p class="edit_user_proile">
                                        <?= $user['id']; ?>
                                    </p>
                                </div>

                                <div class="user_profile_edit">
                                    <label for="" style="color:blue;">Your user CODE : </label>
                                    <p class="edit_user_proile">
                                        <?= $user['user_id']; ?>
                                    </p>
                                </div>

                                <div class="user_profile_edit">
                                    <label for="" style="color:blue;">New First Name</label>
                                    <input type="text" class="edit_user_proile" name="userfirstname" value="<?= $user['userfirstname']; ?> " placeholder="Enter your New name">
                                </div>

                                <div class="user_profile_edit">
                                    <label for="">Last Name</label>
                                    <input type="text" class="edit_user_proile" name="userlastname" placeholder="Enter your user name" value="<?= $user['userlastname']; ?>">
                                </div>

                                <div class="user_profile_edit">
                                    <label for="" style="color:blue;">New Email : </label>
                                    <p class="edit_user_proile" name="useremail">
                                        <?= $user['useremail']; ?>
                                    </p>
                                </div>
                            </div>

                            <div class="update_update">
                                <div class="user_profile_edit">
                                    <label for="" style="color:blue;">New Password</label>
                                    <input type="password" class="edit_user_proile" name="userpassword" value="<?= $user['userpassword']; ?>" placeholder="Enter your New password">
                                </div>

                                <div class="user_profile_edit">
                                    <label for="">New ID Number</label>
                                    <input type="text" class="edit_user_proile" name="idNum" placeholder="Enter your ID Number" value="<?= $user['idNum']; ?>">
                                </div>

                                <div class="user_profile_edit">
                                    <label for="">New Birth Date</label>
                                    <input type="date" class="edit_user_proile" name="birth_date" value="<?= $user['birth_date']; ?>" placeholder="Modify your ID card Number">
                                </div>

                                <div class="user_profile_edit">
                                    <label for="">New Current Adress</label>
                                    <input type="text" class="edit_user_proile" name="adress" placeholder="Modify your current Adress" value="<?= $user['adress']; ?>">
                                </div>

                                <div class="user_profile_edit">
                                    <label for=""> New Phone</label>
                                    <input type="text" class="edit_user_proile" name="phone" placeholder="Modify your phone number" value="<?= $user['phone']; ?>">

                                </div>
                            </div>

                        </div>

                        <div class="proedit_container">
                            <div class="profile_addStudent">
                                <input type="submit" name="save" class="CNXsavebtn" value="SAVE">
                            </div>

                            <div class="profile_addStudent">
                                <h3><a href="./students.php" class="CNXcanceltn">Cancel</a></h3>
                            </div>
                        </div>

                        <div class="error_message" style="width:60%;color:red; text-align:center; margin-top:0.5rem;display:block;">
                            <?php
                            if (isset($error_message)) {
                                echo $error_message . '<br>';
                            }
                            ?>
                        </div>

                        <?php
                        if (isset($success_message)) {
                            echo "<div class='success_message' style='width:100%;color:green;background-color:#80fa8063;text-align:center; margin-top:0.1rem;display:block;padding:0.4rem;'>$success_message </div>";
                        }
                        ?>
            </div>
        </form>
    <?php
                } else {
    ?>
        <h4 style="color:red;text-align:center;margin-top:5rem;margin-bottom:1rem;">ID number <?php echo $userID ?> not found !</h4>
        <a href='students.php' style="margin:0.2rem auto;background-color:blue;width:20%;letter-spacing:0.3rem;text-decoration:none; display:block;text-align:center;border-radius:30px;color:white;padding:0.2rem;font-family:'popins';">Back</a>
<?php
                }
            }

?>
    </div>
    </div>

    <!-- ============== icon links ============= -->
    <script src="./assets/js/icon.js"></script>
    <script src="./assets/js/ionicons.js"></script>

    <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<!-- ============== icon links ============= -->
</body>
</html>