<?php 

if(!isset($_SESSION['user']) && !isset($_SESSION['admin'])){
    header('location:' .$appLink . 'index.php');
    exit();
}