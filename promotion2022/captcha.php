<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <label for="">Captcha</label>
    <div class="captcha_tex">
        <input type="text" class="s_captcha"  placeholder="Type the Captcha">
        <div class="captcha" name="captcha">
        <?php
            $rand_str = md5(rand());

            $str = substr($rand_str, 0, 6);
            $_SESSION['captcha'] = $str;
            echo $str;
            ?>
        </div>
    </div>


    <!-- <label for="">Captcha</label>
    <div class="captcha_tex">
        <input type="text" class="s_captcha"  placeholder="Type the Captcha">
        <div class="captcha" name="captcha">
            //<?php
                // $captcha_code = rand(100, 200);
                // $SESSION['CODE'] = $captcha_code;
                // $img = imagecreatetruecolor(60, 30);
                // $bgcolor = imagecolorallocate($img,0,0,255);
                // imagefill( $img,0,0, $bgcolor);
                // $text_olor = imagecolorallocate($img, 0, 0, 0);
                // imagestring($img,10,0,0, $captcha_code, $text_olor);
                // header('content-type:image/jpeg');
                // imagejpeg($img);
            // ?>
        </div> -->
    
</body>
</html>