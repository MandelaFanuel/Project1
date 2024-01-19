<?php
require_once "dbconneion.php";
require_once "functions.php";


if($_SERVER["REQUEST_METHOD"] !== "POST"){
    exit("Post submit method is required!");
}

if(empty($_FILES)){
    exit("Any image selected!");

if(isset($_GET['id'])){
    $userID = intval($_GET['id']);

    $query = "SELECT * FROM gestion2 WHERE id = '$userID'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        foreach($result as $query){

        }
}
}
}

if($_FILES["image"]["error"] !== UPLOAD_ERR_OK){
    
    switch ($_FILES['image']['error']){

        case UPLOAD_ERR_PARTIAL:
            exit("File only partially uploaded !");
            break;

        case UPLOAD_ERR_NO_FILE:
            exit("No file was  uploaded !");
            break;

        case UPLOAD_ERR_EXTENSION:
            exit("File extension error!");
            break;

        // case UPLOAD_ERR_FORM_SIZE:
        //     exit("The file is too larger to beuploaded!");
        //     break;

        case UPLOAD_ERR_INI_SIZE:
                exit("File size not suported, itis too larger to be uploaded in php.ini!");
                break;

        case UPLOAD_ERR_NO_TMP_DIR:
            exit("File folder not found!");
            break;

        case UPLOAD_ERR_CANT_WRITE:
            exit("Failed to write file!");
            break;

        default:
            exit("Unknon upload error!");
            break;  
    }

//     $userID = intval($_GET['id']);
//     $file_name = $_FILES['file']['name'];
//     $file_temp = $_FILES['file']['tmp_name'];
//     $file_size = $_FILES['file']['size'];
//     $file_type = $_FILES['file']['type'];

//     $file_location = "upload/".$file_name;

//     if($file_size < 524880){
//         if(move_uploaded_file($file_temp, $file_location)){
//                 $query = "UPDATE gestion2 SET photo ='$file_location' WHERE id = '$userID'";
//                 $result = mysqli_query($conn, $query);

//                 // $result = null;
//                  header("location:students.php");
//         }
//     }
//     else{
//         echo "File is too larger to be uploaded !";
//     }
}

if($_FILES["image"]["size"] > 1048576){
    exit("The file must have (max: 1MB) to be uploaded!");
}

$min_types = ["image/gif", "image/png", "image/jpeg"];
if(! in_array($_FILES["image"] ["type"], $min_types)){
    exit("Invalid file type, only JPEG, PNG or GIF file types can be uploaded!");
}

$filename = $_FILES["image"]["name"];

$destination = __DIR__. "/upload" .$filename;
if (! move_uploaded_file($_FILES["image"]["tmp_name"], $destination)){
    exit("Can't move upload file!");
}

print_r($_FILES);
?>