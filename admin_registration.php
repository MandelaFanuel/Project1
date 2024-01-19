<?php

// session_start();
    require_once "dbconnexion.php";
    require_once "functions.php";
    // require_once "students.php";


    if(isset($_POST['validate'])){
        $fname = $_POST["userfirstname"];
        $lname = $_POST['userlastname'];
        $email = $_POST["useremail"];
        $password = $_POST["userpassword"];
        $conf_password = $_POST["userpassword2"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];
       

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        if(!empty($fname)&& isset($fname) || !empty($lname)&& isset($lname) || !empty($email) && isset($email) || !empty($password) && isset($password) || !empty($conf_password)&& isset($conf_password) || !empty($gender) && isset($gender) || !empty($phone) && isset($phone)){
            $query = "SELECT useremail FROM  gestion2 WHERE useremail='$email'";
            $result = mysqli_query($conn, $query);
            $count_user1 = mysqli_num_rows($result);

            if($count_user1 >0) {
                $error_message = "This user's email already exists!";
                
            }else {
                $user_id = random_num(10);
            
                    if($password > 8 || $password === 8){
                        if($conf_password === $password){
                            $query = "INSERT INTO gestion2(user_id, userfirstname, userlastname, useremail, userpassword, gender, phone) VALUES ('$user_id','$fname','$lname','$email','$password_hash','$gender','$phone')";
                            $result = mysqli_query($conn, $query);
                            $success_message = "Student added successfully!";

                        }else{
                            $error_message ="Oups! Password don't march!";
                        }
                    }
                    else{
                        $error_message = "Password must have 8 or mare than 8 characters !";
                    }
            }
        }
        else {
            $error_message = "All fields are required!";
        }     
    }
    // exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>

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
        <div class="container_principal_register_admin">
                <h1>Admin Registration</h1>

            <form method="POST" class="user_form_register_admin">
            
                <div class="user_form_register_names">
                    <label for="">First Name</label>
                    <input type="text" class="user_name" name="userfirstname" placeholder="Enter your user name" autocomplete="auto">
                    
                    <label for="">Last Name</label>
                    <input type="text" class="user_name" name="userlastname" placeholder="Enter your user name" autocomplete="auto">
                    

                    <label for="">Email</label>
                    <input type="email" class="user_name" name="useremail" placeholder="Enter your email" autocomplete="auto">

                    <label for="">Password</label>
                    <input type="password" class="user_name" name="userpassword" placeholder="Enter your password" autocomplete="off">
                </div>
                
                <div class="user_form_register_gender">
                    <label for="">Confirm Password</label>
                    <input type="password" class="user_name" name="userpassword2" placeholder="Re_Enter your password" autocomplete="off">

                    <label for="">Gender</label>
                    <input type="text" class="user_name" name="gender" placeholder="Select your Gender">
                    
                    <label for="">Admin Code</label>
                    <input type="text" class="user_name" name="admin_code" placeholder="Enter your Adress" autocomplete="auto">
                    
                    <label for="">Phone</label>
                    <input type="text" class="user_name" name="phone" placeholder="Enter your phone number" autocomplete="off">

                </div>

                <input type="submit" class="adminvalidationbtn" name="validate"  value="Register" style="margin-bottom:3rem;">
                
                <div class="error_message" style="position: absolute;bottom: 0;width:40%;color:red; text-align:center;padding: 0.77rem;display:flex; margin-left: 2rem;">

                    <?php
                        if(isset($error_message)){
                            echo $error_message.'<br>';
                        }
                    ?>
                </div>
                
                <?php
                    if(isset($success_message)){
                        echo "<div class='success_message' style='width:100%;color:green;background-color:#80fa8063;text-align:center; margin-top:0.1rem;display:block;padding:0.3rem;'>$success_message </div>";
                    }
                ?>
            </form>
        </div>
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