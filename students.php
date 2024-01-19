<?php 
session_start();
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
                        <a href="registration.php"><h3>Add New</h3></a>
                    </div>

                    <div class="allstudents">
                    <ion-icon name="people-outline" class="addIcon"></ion-icon>
                        <h3>Studients</h3>
                    </div>

                    <div class="addStudent">
                        <ion-icon name="calendar-number-outline" class="addIcon"></ion-icon>
                        <select name="links" id="promotion" onchange="window.location.href=this.value;">
                            <option desabled selected><h2>Promotions</h2></option>
                            <option value="promotion2021.php"><h3 name='promotion2022'>Promotion 2021</h3>
                                <option value="promotion2021/listBac1.php">Bac 1</option>
                                <option value="promotion2021/listBac2.php">Bac 2</option>
                                <option value="promotion2021/listBac3.php">Bac 3</option>
                                <option value="promotion2021/listBac4.php">Bac 4</option>
                            </option>
                            <option value="promotion2022.php"><h3 name='promotion2022'>Promotion 2022</h3>
                                <option value="promotion2022/listBac1.php">Bac 1</option>
                                <option value="promotion2022/listBac2.php">Bac 2</option>
                                <option value="promotion2022/listBac3.php">Bac 3</option>
                                <option value="promotion2022/listBac4.php">Bac 4</option>
                            </option>
                            <option value="promotion2023.php"><h3 name='promotion2023'>Promotion 2023</h3>
                                <option value="promotion2023/listBac1.php">Bac 1</option>
                                <option value="promotion2023/listBac2.php">Bac 2</option>
                                <option value="promotion2023/listBac3.php">Bac 3</option>
                                <option value="promotion2023/listBac4.php">Bac 4</option>
                            </option>
                            <option value="promotion2024.php"><h3 name='promotion2024'>Promotion 2024</h3>
                                <option value="promotion2024/listBac1.php">Bac 1</option>
                                <option value="promotion2024/listBac2.php">Bac 2</option>
                                <option value="promotion2024/listBac3.php">Bac 3</option>
                                <option value="promotion2024/listBac4.php">Bac 4</option>
                            </option>

                            <option value="promotion2025.php"><h3 name='promotion2024'>Promotion 2025</h3>
                                <option value="promotion2025/listBac1.php">Bac 1</option>
                                <option value="promotion2025/listBac2.php">Bac 2</option>
                                <option value="promotion2025/listBac3.php">Bac 3</option>
                                <option value="promotion2025/listBac4.php">Bac 4</option>
                            </option>
                        </select>
                    </div>


                    <div class="addStudent">
                    <ion-icon name="happy-outline" class="addIcon"></ion-icon>
                    <ion-icon name="calendar-number-outline" class="addIcon"></ion-icon>
                    <select name="links" id="promotion" onchange="window.location.href=this.value;">
                            <option desabled selected><h2>Performed</h2></option>
                            <option value="performed2021.php"><h3 name='performed2021'>Promotion 2021</h3>
                                <option value="performed2021/performedBac1.php">Bac 1</option>
                                <option value="performed2021/performedBac2.php">Bac 2 </option>
                                <option value="performed2021/performedBac3.php">Bac 3 </option>
                                <option value="performed2021/performedBac4.php">Bac 4 </option>
                            </option>

                            </option>
                            <!-- <option value="performed2022.php"><h3 name='performed2022'>Promotion 2022</h3>
                         --> <option value="performed2022.php">Promotion 2022 
                                <option value="performed2022/performedBac1.php">Bac 1</option>
                                <option value="performed2022/performedBac2.php">Bac 2 </option>
                                <option value="performed2022/performedBac3.php">Bac 3 </option>
                                <option value="performed2022/performedBac4.php">Bac 4 </option>
                            </option>
                           
                            <option value="performed2023.php">Promotion 2023 
                                <option value="performed2023/performedBac1.php">Bac 1</option>
                                <option value="performed2023/performedBac2.php">Bac 2 </option>
                                <option value="performed2023/performedBac3.php">Bac 3 </option>
                                <option value="performed2023/performedBac4.php">Bac 4 </option>
                            </option>

                            <option value="performed2024.php">Promotion 2024 
                                <option value="performed2024/performedBac1.php">Bac 1</option>
                                <option value="performed2024/performedBac2.php">Bac 2 </option>
                                <option value="performed2024/performedBac3.php">Bac 3 </option>
                                <option value="performed2024/performedBac4.php">Bac 4 </option>
                            </option>

                            <option value="performed2025.php">Promotion 2025 
                                <option value="performed2025/performedBac1.php">Bac 1</option>
                                <option value="performed2025/performedBac2.php">Bac 2 </option>
                                <option value="performed2025/performedBac3.php">Bac 3 </option>
                                <option value="performed2025/performedBac4.php">Bac 4 </option>
                            </option>
                        </select> 
                    </div>
                    

                    <div class="addStudent">
                        <ion-icon name="calendar-number-outline" class="addIcon"></ion-icon>
                        <select name="links" id="promotion" onchange="window.location.href=this.value;">
                            <option desabled selected><h2>Saitisfied</h2></option>
                            <option value="satisfied2021/satisfiedBac1.php"><h3 name='promotion2022'>Promotion 2021</h3>
                                <option value="satisfied2021/satisfiedBac1.php">Bac 1</option>
                                <option value="satisfied2021/listBac2.php">Bac 2</option>
                                <option value="satisfied2021/listBac3.php">Bac 3</option>
                                <option value="satisfied2021/listBac4.php">Bac 4</option>
                            </option>
                            <option value="promotion2022.php"><h3 name='promotion2022'>Promotion 2022</h3>
                                <option value="satisfied2022/listBac1.php">Bac 1</option>
                                <option value="satisfied2022/listBac2.php">Bac 2</option>
                                <option value="satisfied2022/listBac3.php">Bac 3</option>
                                <option value="satisfied2022/listBac4.php">Bac 4</option>
                            </option>
                            <option value="promotion2023.php"><h3 name='promotion2023'>Promotion 2023</h3>
                                <option value="satisfied2023/listBac1.php">Bac 1</option>
                                <option value="satisfied2023/listBac2.php">Bac 2</option>
                                <option value="satisfied2023/listBac3.php">Bac 3</option>
                                <option value="satisfied2023/listBac4.php">Bac 4</option>
                            </option>
                            <option value="promotion2024.php"><h3 name='promotion2024'>Promotion 2024</h3>
                                <option value="satisfied2024/listBac1.php">Bac 1</option>
                                <option value="satisfied2024/listBac2.php">Bac 2</option>
                                <option value="satisfied2024/listBac3.php">Bac 3</option>
                                <option value="satisfied2024/listBac4.php">Bac 4</option>
                            </option>

                            <option value="promotion2025.php"><h3 name='promotion2024'>Promotion 2025</h3>
                                <option value="satisfied2025/listBac1.php">Bac 1</option>
                                <option value="satisfied2025/listBac2.php">Bac 2</option>
                                <option value="satisfied2025/listBac3.php">Bac 3</option>
                                <option value="satisfied2025/listBac4.php">Bac 4</option>
                            </option>
                        </select>
                    </div>

                    <div class="addStudent">
                        <ion-icon name="calendar-number-outline" class="addIcon"></ion-icon>
                        <select name="links" id="promotion" onchange="window.location.href=this.value;">
                            <option desabled selected><h2>Failed</h2></option>
                            <option value="failed2021/failed2021.php"><h3 name='promotion2022'>Promotion 2021</h3></option>
                                
                            <option value="failed2022/failed2022.php"><h3 name='promotion2022'>Promotion 2022</h3></option>
            
                            <option value="failed2023/failed2023.php"><h3 name='promotion2022'>Promotion 2023</h3></option>
                            
                            <option value="failed2024/failed2024.php"><h3 name='promotion2024'>Promotion 2024</h3></option>

                            <option value="failed2025/failed2025.php"><h3 name='promotion2024'>Promotion 2025</h3></option>
                        </select>
                    </div>


                    <div class="addStudent">
                        <ion-icon name="settings-outline" class="addIcon" ></ion-icon>
                        <select name="" id="promotion" onchange="window.location.href=this.value;">
                            <option desabled selected value=""><h3>Settings</h3></option>
                            <option value=""><h6>Modify Profile</h6></option>
                            <option value=""><h6>Rapport :</h6>
                                <option value="">Monthlly</option>
                                <option value="">Annually</option>
                            </option>
                            <option value="">Go to Chat</option>
                        </select>
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
                                    <th>Eser First Name</th>
                                    <th>Eser Last Name</th>
                                    <th>User Email</th>
                                    <th>User Gender</th>
                                    <th>User ID Number</th>
                                    <th>User Adress</th>
                                    <th>Bith Date</th>
                                    <th>User Phone Number</th>
                                    <th>Promotion</th>
                                    <th>Registration Date</th>
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
                                            <td><?=$row['registration_date'];?></td>
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
