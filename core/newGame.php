<?php 
require_once '../core/Config.php';
require_once '../includes/branched/config.php';

$conn = Config::connect();


if(isset($_POST['upload'])){
  $name = $_POST['name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];

  $query = $conn->prepare("INSERT INTO games (name,price,quantity) 
  VALUES ('$name',$price,$quantity);");
  $query->execute();
  
  header("location: ".$appLink."pages/admin.php?add=success");
  exit();

}

  if(isset($_POST['cancel'])){
    header("location: ".$appLink."pages/admin.php");
     exit();
 }

if(isset($_POST['save'])){

$id = $_POST['id'];
$names = $_POST['name'];
$prices = $_POST['price'];
$quantitys = $_POST['quantity'];

if(updateGame($conn,$names,$prices,$quantitys,$id)){
  header("location: ../pages/admin.php?change=success");
  exit();
  }
  else {
    header("location ../pages/admin.php?change=fail");
    exit();
  }
}


function updateGame($conn,$name,$price,$quantity,$id){
  $query = $conn->prepare(" UPDATE games SET name = '$name', price=$price, quantity=$quantity WHERE id=$id;
  ");
  return $query->execute();
}

