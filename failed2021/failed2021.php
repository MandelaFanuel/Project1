<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performed</title>

    
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
    <div class="header_promotions">
        <div class="header_promotions">
            <div class="header_img_promotions">
                <img src="./imgs/Saitimu.jpg" alt="">
            </div>

            <div class="header_content_promotions">
                <h3><a href="./registration.php">About DAFI</a></h3>
            </div>
               
            <div class="header_content_promotions">
                <h3><a href="./registration.php">Ret</a></h3>
            </div>

            <div class="header_content_promotions">
                <h3><a href="./home.php">Fanius</a></h3>
            </div>

            <div class="header_content_promotions">
                <h3><a href="./home.php">Rapport</a></h3>
            </div>
        </div>
    </div>

            <div class="pre_table_promotions">
                <div class="title_research_promotions">
                    <div class="backhome_dashboard">
                        <!-- <a href="students.php" ><ion-icon name="arrow-back-outline" class="homeIcon"></ion-icon></a> -->
                        <p><a href="/new/students.php" >Back</a></p>  
                    </div>

                    <div class="title">
                        <p><h1>Promotion 2021</h1></p>
                    </div>

                    <div class="search">
                        <input type="text" name="search" id="searchinput" placeholder="Searche Items...">
                        <p style="background-color:#08248091; color:white;position:absolute;padding:0.5rem;border-bottom-right-radius: 8px;border-top-right-radius: 8px;margin-left:-11rem;cursor:pointer;">search</p>
                    </div>
                </div>

                <div class="table_promotions">
                    <table class="table_promotion2022">
                            <thead>
                                <tr> 
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Eser First  Name</th>
                                    <th>Eser Last  Name</th>
                                    <th>User Email</th>
                                    <th>User Gender</th>
                                    <th>User ID Number</th>
                                    <th>User Adress</th>
                                    <th>Birth Date</th>
                                    <th>User Phone Number</th>
                                    <th>Promotion</th>
                                    <th>Lval(class)</th>
                                    <th>Irst Semstr</th>
                                    <th>IInd Semstr</th>
                                    <th>registration_date</th>
                                    <th>Detail</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                        <tbody>

                            <?php
                                require_once "dbconnexion.php";
                                require_once "functions.php";
                             
                                $result = failed_2021();
                                
                                if(mysqli_num_rows($result) >0){
                                    foreach($result as $row){
                                        ?>
                                        <tr>
                                            <td class="emails"><?=$row['id'];?></td>
                                            <td class="emails"><?=$row['user_id'];?></td>
                                            <td class="emails"><?=$row['userfirstname'];?></td>
                                            <td class="emails"><?=$row['userlastname'];?></td>
                                            <td class="emails"><?=$row['useremail'];?></td>
                                            <td class="emails"><?=$row['gender'];?></td>
                                            <td class="emails"><?=$row['idNum'];?></td>
                                            <td class="emails"><?=$row['adress'];?></td>
                                            <td class="emails"><?=$row['birth_date'];?></td>
                                            <td class="emails"><?=$row['phone'];?></td>
                                            <td class="emails"><?=$row['promotion_date'];?></td>
                                            <td class="emails"><?=$row['lavel'];?></td>    
                                            <td class="emails"><?=$row['premier_smstr'];?>%</td>
                                            <td class="emails"><?=$row['second_smstr'];?>%</td>
                                            <td><?=$row['registration_date'];?></td>
                                            <td><a href="userdetail.php?id=<?=$row['id'];?>"class="detail_button">Details</a></td>
                                            <td><a href="edit_user.php?id=<?=$row['id'];?>"class="edit_button">Edit</a></td>
                                            <td><a href="delete_user.php?id=<?=$row['id'];?>" class="delete_button">Delete</a></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else {
                                    $error_message ="No result found !";
                                }
                            ?>
                             
                        
                        </tbody>
                    </table>
                </div>
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
