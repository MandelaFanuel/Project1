<?php
session_start();

if(isset($_SESSION['usereemail'])){
    unset($_SESSION['usereemail']);
}

header("location:home.php");
die;