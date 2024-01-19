<?php 
require_once "logout.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>

    
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
    <link rel="stylesheet" href="style2.css">
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

    <div class="principal">
            <div class="admin">
                <div class="adminDashboard">

                    <div class="dashboardtittle">
                        <p><h3><b>Admin DASHBOARD</b></h3></p>
                    </div>
                    <hr>

                    <div class="backhome_dashboard">
                    <a href="home.php" ><ion-icon name="home" class="homeIcon"></ion-icon></a>
                </div>

                    <div class="addStudent">
                        <ion-icon name="person-add-outline" class="addIcon"></ion-icon>
                        <a href="registration2.php"><h3>Add New</h3></a>
                    </div>

                    <div class="allstudents">
                    <ion-icon name="people-outline" class="addIcon"></ion-icon>
                        <h3>Studients</h3>
                    </div>

                    <div class="addStudent">
                        <ion-icon name="calendar-number-outline" class="addIcon"></ion-icon>
                        <h3>Promotions</h3>
                    </div>

                    <div class="addStudent">
                    <ion-icon name="happy-outline" class="addIcon"></ion-icon>
                        <h3>Performed</h3>
                    </div>
                    
                    <div class="addStudent">
                        <ion-icon name="sad-outline" class="addIcon"></ion-icon>
                        <h3>Failed</h3>
                    </div>
                    
                    <div class="addStudent">
                        <ion-icon name="settings-outline" class="addIcon"></ion-icon>
                        <h3>Settings</h3>
                    </div>

                    <div class="addStudent">
                    <h2><a href="./logout.php">LogOut</a></h2>
                </div>
                </div>
            </div>


            <div class="pre_table">
                <div class="title_research">
                    <div class="title">
                        <p><h1>Students Management</h1></p>
                    </div>

                    <div class="search">
                        <input type="text" name="search" id="searchinput" placeholder="Searche Items...">
                        <p style="background-color:#08248091; color:white;position:absolute;padding:0.5rem;border-bottom-right-radius: 8px;border-top-right-radius: 8px;margin-left:-11rem;cursor:pointer;">search</p>
                    </div>
                </div>

                <div class="table_container">
                    <table class="table_table">
                            <thead>
                                <tr> 
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Eser Name</th>
                                    <th>User Email</th>
                                    <th>User Gender</th>
                                    <th>User ID Number</th>
                                    <th>User Adress</th>
                                    <th>User Phone Number</th>
                                    <th>Date</th>
                                    <th>Detail</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                        <tbody>

                            <?php
                                require_once "dbconnexion.php";
                                require_once "functions.php";
                             
                                $result = display_data();

                                if(mysqli_num_rows($result) >0){
                                    foreach($result as $row){
                                        ?>
                                        <tr>
                                            <td><?=$row['id'];?></td>
                                            <td><?=$row['user_id'];?></td>
                                            <td><?=$row['username'];?></td>
                                            <td><?=$row['useremail'];?></td>
                                            <td><?=$row['gender'];?></td>
                                            <td><?=$row['idNum'];?></td>
                                            <td><?=$row['adress'];?></td>
                                            <td><?=$row['phone'];?></td>
                                            <td><?=$row['date'];?></td>
                                            <td><a href="userdetail.php?id=<?=$row['id'];?>"class="detail_button">Details</a></td>
                                            <td><a href="edit_user.php?id=<?=$row['id'];?>"class="edit_button">Edit</a></td>
                                            <td><a href="delete_user.php?id=<?=$row['id'];?>" class="delete_button">Delete</a></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <?php
            // require_once "footer.php";
            ?>
    </div>

    <script>
        let button = document.querySelector('.allstudents');
        let liste = document.querySelector('.table_table');

        button.addEventListener('click',(e)=>{
            liste.classList.toggle('afficherListe');
        });
    </script>

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