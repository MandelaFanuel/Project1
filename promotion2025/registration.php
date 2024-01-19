<?php

// session_start();
    require_once "dbconnexion.php";
    require_once "functions.php";
    require_once "students.php";


    if(isset($_POST['validate'])){
        $fname = $_POST["userfirstname"];
        $lname = $_POST['userlastname'];
        $email = $_POST["useremail"];
        $password = $_POST["userpassword"];
        $conf_password = $_POST["userpassword2"];
        $gender = $_POST["gender"];
        $id_num = $_POST['idNum'];
        $adress = $_POST["adress"];
        $birth_date = $_POST["birth_date"];
        $phone = $_POST["phone"];
        $promotion_date = $_POST['promotion_date'];
        $lavel = $_POST['lavel'];
        $premier_smstr = $_POST['premier_smstr'];
        $second_smstr = $_POST['second_smstr'];

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        if(!empty($fname)&& isset($fname) || !empty($lname)&& isset($lname) || !empty($email) && isset($email) || !empty($password) && isset($password) || !empty($conf_password)&& isset($conf_password) || !empty($gender) && isset($gender) || !empty($id_num) && isset($id_num) || !empty($adress) && isset($adress) || !empty($birth_date) && isset($birth_date) || !empty($phone) && isset($phone) || !empty($promotion_date) && isset($promotion_date)|| !empty($lavel) && isset($lavel) || !empty($premier_smstr) && isset($premier_smstr) || !empty($second_smstr) && isset($second_smstr)){
            $query = "SELECT useremail FROM  gestion2 WHERE useremail='$email'";
            $result = mysqli_query($conn, $query);
            $count_user1 = mysqli_num_rows($result);

            if($count_user1 >0) {
                $error_message = "This user's email already exists!";
                
            }else {
                $user_id = random_num(10);
            
                    if($password > 8 || $password === 8){
                        if($conf_password === $password){
                            $query = "INSERT INTO gestion2(user_id, userfirstname, userlastname, useremail, userpassword, gender, idNum, adress, birth_date, phone, promotion_date, lavel, premier_smstr, second_smstr) VALUES ('$user_id','$fname','$lname','$email','$password_hash','$gender','$id_num','$adress','$birth_date','$phone','$promotion_date','$lavel','$premier_smstr','$second_smstr')";
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
    <title>Registration</title>

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
    <div class="container">
        <div class="container_principal_register">
                <h1>User Registration</h1>

            <form method="POST" class="user_form_register">
            
                <div class="user_form_register_names">
                    <label for="">First Name</label>
                    <input type="text" class="user_name" name="userfirstname" placeholder="Enter your user name" autocomplete="auto">
                    
                    <label for="">Last Name</label>
                    <input type="text" class="user_name" name="userlastname" placeholder="Enter your user name" autocomplete="auto">
                    

                    <label for="">Email</label>
                    <input type="email" class="user_name" name="useremail" placeholder="Enter your email" autocomplete="auto">

                    <label for="">Password</label>
                    <input type="password" class="user_name" name="userpassword" placeholder="Enter your password" autocomplete="off">

                    <label for="">Confirm Password</label>
                    <input type="password" class="user_name" name="userpassword2" placeholder="Re_Enter your password" autocomplete="off">

                    <label for="">Gender</label>
                    <input type="text" class="user_name" name="gender" placeholder="Select your Gender">
                    
                    <label for="">Your ID Number</label>
                    <input type="text" class="user_name" name="idNum" placeholder="Enter your ID Number" autocomplete="off">
                    
                </div>
                
                <div class="user_form_register_gender">
                    <label for="">Your Current Adress</label>
                    <input type="text" class="user_name" name="adress" placeholder="Enter your Adress" autocomplete="auto">
                    
                    <label for="">Birth Date</label>
                    <input type="date" class="user_name" name="birth_date" >
                    
                    <label for="">Promotion Date</label>
                    <input type="text" class="user_name" name="promotion_date" placeholder="Enter your promotion(only Year)" autocomplete="auto">

                    <label for="">Lavel (Class)</label>
                    <input type="text" class="user_name" name="lavel" placeholder="Enter your Leval" >


                    <label for="">Irst S %</label>
                    <input type="text" class="user_name" name="premier_smstr" placeholder="Enter your 1rst Semester's %" autocomplete="auto">

                    <label for="">IInd S %</label>
                    <input type="text" class="user_name" name="second_smstr" placeholder="Enter your Second Semester's %" autocomplete="auto">

                    <label for="">Phone</label>
                    <input type="text" class="user_name" name="phone" placeholder="Enter your phone number" autocomplete="off">

                </div>

                <input type="submit" class="validationbtn" name="validate"  value="Register" style="margin-bottom:3rem;">
                
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