<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

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

<div class="home_content">
    <div class="home_container">
        <div class="home_left">
            <div class="search_search">
                <div class="search_input">
                    <input type="text" class="input_input" placeholder="Search Items...">

                <div class="search_input_text">
                    <h4>Search</h4>
                </div>
            </div>
        </div>

        <div class="questions">
            <div class="Q_A">
                <h3>Questions</h3>
            </div>

            <div class="Q_A">
                <h3>Chat Room</h3>
            </div>     
        </div>

        <div class="texts">
            <p>Manager can create conversation with his students one by one, you have only to cjoin the chatting room option above.</p>
            <p>At the way, Student can ask questions to their different teachers everything that seems to be complicated.</p>

            <div class="text_img">
                <img src="./imgs/Admin.jpg" alt="">
            </div>
        </div>
    </div>

        <div class="home_right">
                <div class="home_right_top">
                    <div class="home_content_right">
                        <h3><a href="./registration1.php">Register</a></h3>
                    </div>
                    
                    <div class="home_content_right">
                        <h3><a href="./connexion.php">Connexion</a></h3>
                    </div>
                </div>

                <div class="home_right_top_img_zone">

                    <div class="home_rightImg">
                        <img src="./imgs/Saitimu.jpg" alt="">
                    </div>

                    <div class="home_rightImg_text">
                        <h2>Student Management</h2>
                        <p>Fanius is a Student Management that permits managers to manage theirs schools from anywhere and anytime</p>
                    </div>
                </div>
                <div class="texts">
                    <p> Thanks for choosing <b>Fanius</b>, Take your restration to make a part of Managers who don't stress in managing their schools through <b>Fanius.</b></p>

                    <div class="text_img">
                        <img src="./imgs/istockphoto-1463017160-1024x1024.jpg" alt="">
                    </div>
                </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer_classess">

            <div class="first_colon">
                <P><h1>UNIVERSITE POLYTECHNIQUE DE GITEGA</h2></P>
                    <p><h4><a href="creationupg.html">Sa creation</a></h4></p>
                    <p><a href="./creationupg.html">Creez votre compte</a></p>
                    <p><a href="./connexion.html">Connectez-vous</a></p>

                    <p> 
                        <a href="./inscription.html">Inscription</a>
                        <a href="./connexion.html">Connexion</a>
                    </p>
            </div>

            <div class="cour_en_ligne">
                <P><h1>Programme en ligne</h1></p>
                <p>Dans son adaptation des cours a ses etudiants</P>
                <P>L'UPG adobte un tout nouveau programme de donner cours en ligne.</P>
                <P>Pour commencer, certains cours parmis ceux disponibles a l'etablissement,</P>
                <P>Le programme de TIC est bien disponible, il suffit juste de se faire enregistrer et commencer à suivre les cours</P>
                <P><h3><a href="./horaire.html">Jours Ouvrables</a></h3></P>
                <h4><a href="./inscription.html">Horaire</a></h4>
            </div>

            <div class="third_colon">
                <div class="third">
                    <h2>contacts</h2>
                    <h3>Infos Générales</h3><br>
                    <p><h3>Adresse:</h3><br>
                    <p style="color: #e03131;"><b>Route Nationale No 8 km 4</b></p>
                    <p style=" color: #e03131;"><b>BP 490 Gitega</b></p>
                    <p><b>+257 22 404 848</b></p>
                    <p><b>+257 79 926 275</b></p>
                    <p><b>info@upg.edu.bi</b></p>
                </div>

                <div class="third">
                    <h2>Service des Etudiants</h2>
                    <p><b>+257 69 48 08 79</b></p>
                    <p><b>+257 79 926 275</b></p>
                    <p><b>service.etudiants@upg.edu.bi</b></p>
                </div>
            </div>

            <div class="third">
                <h2>Direction Académique</h2>
        
                <p><b>+257 79 85 11 57</b></p>
                <p><b>academic@upg.edu.bi</b></p>
            </div>

            <div class="third">
                <h2>Rectorat</h2>
                <p><b> +257 71 94 0 727</b></p>
                <p><b> rectorat@upg.edu.bi</b></p>
            </div>
        </div>
    </div>
</div>
    
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
    
</body>
</html>