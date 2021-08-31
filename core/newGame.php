<?php 
require_once '../core/Config.php';

$conn = Config::connect();
$id=0;

if(isset($_POST['add'])){
  $name = $_POST['name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];

  $query = $conn->prepare("INSERT INTO games (name,price,quantity) 
  VALUES ('$name',$price,$quantity);");
  $query->execute();
  
  header("location: ../pages/admin.php?add=success");
  exit();

}

if(isset($_POST['save'])){
    $id = $_POST['gameid'];
    $name = $_POST['gamename'];
    $price = $_POST['gameprice'];
    $quantity = $_POST['gamequantity'];
}


  if(isset($_POST['cancel'])){
    header("location:" . $appLink . "pages/admin.php");
     exit();
 }
