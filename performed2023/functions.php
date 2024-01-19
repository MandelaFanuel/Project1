<?php


// USER ID RANDOM GENERATED CODE
function random_num($lenght){
    
    $text = '';

    if($lenght < 5){
        $lenght = 5;
    }

    $len = rand(4, $lenght);

    for($i = 0; $i < $len; $i++){
        $text.= rand(0, 9);
    }
    return $text;   
}

// DISPLAY DATA FUNCTION

function display_data(){
    global $conn;

    $query = "SELECT * FROM gestion2";
    $result = mysqli_query($conn, $query);
    return $result;
}

// DISPLAY PROMOTIONS FUNCTION

// DISPLAY PROMOTION FUNCTION 2021
function display_options2021(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE promotion_date = '2021'";
    $result = mysqli_query($conn, $query);
    return $result;
   
}

// DISPLAY STUDENTS IN BAC I

function display_bacI_students(){
global $conn;

$query = "SELECT * FROM gestion2 WHERE lavel = 1";
$result = mysqli_query($conn, $query);
return $result;
}

// DISPLAY PROMOTION FUNCTION 2022
function display_options2022(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE promotion_date = '2022'";
    $result = mysqli_query($conn, $query);
    return $result;
   
}

// DISPLAY STUDENTS IN BAC II

function display_bacII_students(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE lavel = 2";
    $result = mysqli_query($conn, $query);
    return $result;
    }

// DISPLAY PROMOTION FUNCTION 2023
function display_options2023(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE promotion_date = '2023'";
    $result = mysqli_query($conn, $query);
    return $result;
   
}

// DISPLAY STUDENTS IN BAC III

function display_bacIII_students(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE lavel = 3";
    $result = mysqli_query($conn, $query);
    return $result;
    }

// DISPLAY PROMOTION FUNCTION 2024
function display_options2024(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE promotion_date = '2024'";
    $result = mysqli_query($conn, $query);
    return $result;
   
}

// DISPLAY STUDENTS IN BAC VI

function display_bacVI_students(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE lavel = 4";
    $result = mysqli_query($conn, $query);
    return $result;
    }

    // DISPLAY STUDENTS IN BAC VI

function display_bacV_students(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE lavel = 5";
    $result = mysqli_query($conn, $query);
    return $result;
    }

// DISPLAY PROMOTION FUNCTION 2025
function display_options2025(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE promotion_date = '2025'";
    $result = mysqli_query($conn, $query);
    return $result;
}

//  PERFORMED FUNCTION 2021
function performed_2021(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE (promotion_date = '2021') AND (premier_smstr >=70 OR second_smstr >=70)";
    $result = mysqli_query($conn, $query);
    return $result;  
   
}

//  PERFORMED FUNCTION 2022
function performed_2022(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE (promotion_date = '2022') AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;  
   
}

//  PERFORMED FUNCTION 2023
function performed_2023(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE (promotion_date = '2023') AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;   
}

//  PERFORMED FUNCTION 2024
function performed_2024(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE (promotion_date = '2024') AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;  
   
}

//  PERFORMED FUNCTION 2025
function performed_2025(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE (promotion_date = '2025') AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;  
   
}

//  PERFORMED IN BAC 1
function performedBac1_2021(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE (lavel = 1) AND (premier_smstr >=70 OR second_smstr >=70)";
    $result = mysqli_query($conn, $query);
    return $result;  
}

//  PERFORMED IN BAC 2
function performedBac2_2022(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE (lavel = 2) AND (premier_smstr >=70 OR second_smstr >=70)";
    $result = mysqli_query($conn, $query);
    return $result;  
}

//  PERFORMED IN BAC 3
function performedBac3_2023(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE (lavel = 3) AND (premier_smstr >=70 OR second_smstr >=70)";
    $result = mysqli_query($conn, $query);
    return $result;  
}

//  PERFORMED IN BAC 4
function performedBac4_2024(){
    global $conn;

    $query = "SELECT * FROM gestion2 WHERE (lavel = 4) AND (premier_smstr >=70 OR second_smstr >=70)";
    $result = mysqli_query($conn, $query);
    return $result;  
}

// DISPLAY STUDENTS IN BAC I PROMOTION 2021

function affiche_Bac1_promotion2021(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2021 AND lavel = 1";
    $result = mysqli_query($conn, $query);
    return $result;
    }

   // DISPLAY STUDENTS IN BAC 2 PROMOTION 2021

function affiche_Bac2_promotion2021(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2021 AND lavel = 2";
    $result = mysqli_query($conn, $query);
    return $result;
    }

    // DISPLAY STUDENTS IN BAC 3 PROMOTION 2021

function affiche_Bac3_promotion2021(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2021 AND lavel = 3";
    $result = mysqli_query($conn, $query);
    return $result;
    }

   // DISPLAY STUDENTS IN BAC 4 PROMOTION 2021

function affiche_Bac4_promotion2021(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2021 AND lavel = 4";
    $result = mysqli_query($conn, $query);
    return $result;
    }


    // DISPLAY STUDENTS IN BAC I PROMOTION 2022

function affiche_Bac1_promotion2022(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2022 AND lavel = 1";
    $result = mysqli_query($conn, $query);
    return $result;
    }

        // DISPLAY STUDENTS IN BAC I PROMOTION 2022

function affiche_Bac2_promotion2022(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2022 AND lavel = 2";
    $result = mysqli_query($conn, $query);
    return $result;
    }

        // DISPLAY STUDENTS IN BAC I PROMOTION 2022

function affiche_Bac3_promotion2022(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2022 AND lavel = 3";
    $result = mysqli_query($conn, $query);
    return $result;
    }

        // DISPLAY STUDENTS IN BAC I PROMOTION 2022

function affiche_Bac4_promotion2022(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2022 AND lavel = 4";
    $result = mysqli_query($conn, $query);
    return $result;
    }

        // DISPLAY STUDENTS IN BAC I PROMOTION 2023

function affiche_Bac1_promotion2023(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2023 AND lavel = 1";
    $result = mysqli_query($conn, $query);
    return $result;
    }

       // DISPLAY STUDENTS IN BAC I PROMOTION 2023

function affiche_Bac2_promotion2023(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2023 AND lavel = 2";
    $result = mysqli_query($conn, $query);
    return $result;
    }

           // DISPLAY STUDENTS IN BAC I PROMOTION 2023

function affiche_Bac3_promotion2023(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2023 AND lavel = 3";
    $result = mysqli_query($conn, $query);
    return $result;
    }

           // DISPLAY STUDENTS IN BAC I PROMOTION 2023

function affiche_Bac4_promotion2023(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2023 AND lavel = 4";
    $result = mysqli_query($conn, $query);
    return $result;
    }


           // DISPLAY STUDENTS IN BAC I PROMOTION 2024

function affiche_Bac1_promotion2024(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2024 AND lavel = 1";
    $result = mysqli_query($conn, $query);
    return $result;
    }

               // DISPLAY STUDENTS IN BAC I PROMOTION 2024

function affiche_Bac2_promotion2024(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2024 AND lavel = 2";
    $result = mysqli_query($conn, $query);
    return $result;
    }

               // DISPLAY STUDENTS IN BAC I PROMOTION 2024

function affiche_Bac3_promotion2024(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2024 AND lavel = 3";
    $result = mysqli_query($conn, $query);
    return $result;
    }

               // DISPLAY STUDENTS IN BAC I PROMOTION 2024

function affiche_Bac4_promotion2024(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2024 AND lavel = 4";
    $result = mysqli_query($conn, $query);
    return $result;
    }

               // DISPLAY STUDENTS IN BAC I PROMOTION 2025

function affiche_Bac1_promotion2025(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2025 AND lavel = 1";
    $result = mysqli_query($conn, $query);
    return $result;
    }


                // DISPLAY STUDENTS IN BAC I PROMOTION 2025

function affiche_Bac2_promotion2025(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2025 AND lavel = 2";
    $result = mysqli_query($conn, $query);
    return $result;
    }


                // DISPLAY STUDENTS IN BAC I PROMOTION 2025

function affiche_Bac3_promotion2025(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2025 AND lavel = 3";
    $result = mysqli_query($conn, $query);
    return $result;
    }

                // DISPLAY STUDENTS IN BAC I PROMOTION 2025

function affiche_Bac4_promotion2025(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE Promotion_date = 2025 AND lavel = 4";
    $result = mysqli_query($conn, $query);
    return $result;
    }



    // PERFORMED STUDENTS IN BAC I PROMOTION 2021

function disntinction_Bac1_promotion2021(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2021 AND lavel = 1) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

        // PERFORMED STUDENTS IN BAC II PROMOTION 2021

function disntinction_Bac2_promotion2021(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2021 AND lavel = 2) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }


        // PERFORMED STUDENTS IN BAC III PROMOTION 2021

function disntinction_Bac3_promotion2021(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2021 AND lavel = 3) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

    // PERFORMED STUDENTS IN BAC VI PROMOTION 2021

function disntinction_Bac4_promotion2021(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2021 AND lavel = 4) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }


    // PERFORMED STUDENTS IN BAC I PROMOTION 2022

function disntinction_Bac1_promotion2022(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2022 AND lavel = 1) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

        // PERFORMED STUDENTS IN BAC II PROMOTION 2022

function disntinction_Bac2_promotion2022(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2022 AND lavel = 2) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }


        // PERFORMED STUDENTS IN BAC I PROMOTION 2022

function disntinction_Bac3_promotion2022(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2022 AND lavel = 3) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

    // PERFORMED STUDENTS IN BAC VI PROMOTION 2022

function disntinction_Bac4_promotion2022(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2022 AND lavel = 4) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }


    // PERFORMED STUDENTS IN BAC I PROMOTION 2023

function disntinction_Bac1_promotion2023(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2023 AND lavel = 1) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

           // PERFORMED STUDENTS IN BAC II PROMOTION 2023

function disntinction_Bac2_promotion2023(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2023 AND lavel = 2) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

           // PERFORMED STUDENTS IN BAC II PROMOTION 2023

function disntinction_Bac3_promotion2023(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2023 AND lavel = 3) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

       // PERFORMED STUDENTS IN BAC VI PROMOTION 2023

       function disntinction_Bac4_promotion2023(){
        global $conn;
        
        $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2023 AND lavel = 4) AND (premier_smstr >=70 OR second_smstr >= 70)";
        $result = mysqli_query($conn, $query);
        return $result;
        }


    // PERFORMED STUDENTS IN BAC I PROMOTION 2024

function disntinction_Bac1_promotion2024(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2024 AND lavel = 1) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

// PERFORMED STUDENTS IN BAC II PROMOTION 2024

function disntinction_Bac2_promotion2024(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2024 AND lavel = 2) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

// PERFORMED STUDENTS IN BAC III PROMOTION 2024

function disntinction_Bac3_promotion2024(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2024 AND lavel = 3) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

    // PERFORMED STUDENTS IN BAC VI PROMOTION 2024

function disntinction_Bac4_promotion2024(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2024 AND lavel = 4) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

// PERFORMED STUDENTS IN BAC I PROMOTION 2025

function disntinction_Bac1_promotion2025(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2025 AND lavel = 1) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

 // PERFORMED STUDENTS IN BAC II PROMOTION 2025

function disntinction_Bac2_promotion2025(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2025 AND lavel = 2) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

// PERFORMED STUDENTS IN BAC I PROMOTION 2025

function disntinction_Bac3_promotion2025(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2025 AND lavel = 3) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

    // PERFORMED STUDENTS IN BAC I PROMOTION 2025

function disntinction_Bac4_promotion2025(){
    global $conn;
    
    $query = "SELECT * FROM gestion2 WHERE (Promotion_date = 2025 AND lavel = 4) AND (premier_smstr >=70 OR second_smstr >= 70)";
    $result = mysqli_query($conn, $query);
    return $result;
    }

// EDITTING USER  INFORMATIONS

if(isset($_POST["save"])){

    $userID = $_GET["id"];
    $username = $_POST["username"];
    $password = $_POST["userpassword"];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE gestion2 SET username='$username',userpassword='$password_hash' WHERE id='$userID'";
    $result = mysqli_query($conn, $query);

    if($result){
        $success_message = "User edited successfully ! Click bellow to go to your personnal informations.<br><a href='students.php'> Click here</a>";
    }

}

?>