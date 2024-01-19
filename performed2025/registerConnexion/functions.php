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