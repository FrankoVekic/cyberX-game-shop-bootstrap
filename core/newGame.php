<?php 
require_once '../core/Config.php';

$conn = Config::connect();
$id=0;

if(isset($_POST['save'])){
    $id = $_POST['gameid'];
    $name = $_POST['gamename'];
    $price = $_POST['gameprice'];
    $quantity = $_POST['gamequantity'];


    if(updateGame($conn,$name,$price,$quantity,$id)){
       header("location:" . $appLink . "pages/admin.php?change=success");
        exit();
    }
 }

 function updateGame($conn,$name,$price,$quantity,$id){
    $query = $conn->prepare("UPDATE games SET name = '$name', price=$price,
    quantity=$quantity WHERE id=$id;
    ");
    return $query->execute();
  }

  if(isset($_POST['cancel'])){
    header("location:" . $appLink . "pages/admin.php");
     exit();
 }