<?php 

if(!isset($_SESSION['user'])){
    header('location:' .$appLink . 'index.php');
    exit();
}