
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/boostrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // require_once "dbconnexion.php";
    require_once "imageprofile.php";
 ?>
 <div class="row">
        <h1>Profile upload</h1>
        <form action="imagefile.php" method="POST" enctype="multipart/form-data">

         <input type="hidden" name="MAX_FILE_SIZE" value="8576"> 
            <div class="form-group">
                <label for="">Uplaod here</label>
                <input type="file" name="image" class="control">
            </div>

            <input type="submit" value="Upload" name="Upload" class="profilebtn">
        </form>
    </div> 
</body>
</html>

