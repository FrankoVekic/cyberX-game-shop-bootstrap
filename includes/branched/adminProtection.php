<?php 

if(!isset($_SESSION['admin'])){
    header('location:' .$appLink . 'index.php');
    exit();
}