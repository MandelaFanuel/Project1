<?php
session_start();

  if(isset($_POST['submit'])){
    require_once "dbconnexion.php";


    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    if(!empty($email) || !empty($password)){
        // $password = $_POST['userpassword'];

        $query = "SELECT * FROM gestion2 WHERE useremail = '$email'";
        $result = mysqli_query($conn, $query);
        $count_row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($count_row){
            if(password_verify($password, $count_row['userpassword'])){

                $_SESSION["useremail"] = "$email"; 
                header("location:students.php");
                
            }
            else {
                $error_message ="Email or Password is Incorrect !";
            }  
        }
        else {
            $message_error = "Incorrect Email !";
        }
    }
    else{
        $error_message = "All Fields are required!";
    }
  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

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
        </div>

    <div class="container">
        <div class="container_principal">
            <form method="POST" class="user_form">
                <div class="principal_title_login">
                    
                    <div class="backhome_connexion_connexion">
                        <a href="home.php" ><ion-icon name="home" class="homeIcon"></ion-icon></a>
                        <a href="home.php"><p>Home</p></a>
                    </div>

                    <h1>User Connexion</h1>
                </div>

                <div class="connexion_form">

                    <div class="connexion_connexion">
                        
                        <label for="">Email</label>
                        <input type="email" class="user_name_connexion" name="useremail" placeholder="Email">

                        <label for="" style="color: blue;text-decoration:underline;">Captcha</label>
                        <div class="captcha_tex">
                            <input type="text" class="s_captcha"  placeholder="Type the Captcha">
                            <div class="captcha" name="captcha">
                            <?php
                                $rand_str = md5(rand());
                                $str = substr($rand_str, 0, 6);
                                $_SESSION['captcha'] = $str;
                                // echo "<span style='letter-spacing:0.1rem;font-weight:700';>Captcha</span>";
                                echo $str;
                                ?>
                            </div>
                        </div>

                        
                    </div>
                    
                    <div class="connexion_connexion">
                        <label for="">Password</label>
                        <input type="password" class="user_name_connexion" name="userpassword" placeholder="Password">
                        
                        <input type="submit" name="submit" class="CNXvalidationbtn" value="Connexion">
                        <?php
                            if(isset($error_message)){
                                echo "<div class='error_message' style='width:100%;color:red; text-align:center;padding:0.4rem;display:flex; margin-left: 2rem;'>$error_message</div>"; 
                            }
                        ?>
                    
                        <?php
                            if(isset($success_message)){
                            echo "<div class='success_message' style='width:100%;color:green;background-color:#80fa8063;text-align:center; margin-bottomm:0.7rem;display:block;padding:0.4rem;'> $success_message</div>";
                        }
                        ?>
                    
                    <a href="registerConnexion/registration1.php" style="width:100%;color:#0bf80b;bottom:0;border-radius:30px;background-color:#0000ff67;padding:0.5rem;text-align:center;">Click to Register</a>
                    </div>
                    
                </div>
            </form>
        </div>
    </div
    
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



<!-- 

.connexion_form {
    display: block;
    padding: 0.7rem;
    margin-bottom: 2rem;
    margin: auto;
    width: 60%;
    background-color: #718ac0;
    backdrop-filter: blur(50px);
    border-radius: 8px;
    border: 0.1px solid blue;
    box-shadow: 0 3px 3px 0 #0000004d;
}

.connexion_form label {
    width: 100%;
    color: #e7e2e2fd;
    font-family: 'poppins';
    margin-bottom: 1rem;
    display: block;
    margin-left: -3.7rem;
}
 -->