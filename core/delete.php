<?php 
require_once '../core/Config.php';

$conn = Config::connect();
$id = $_GET['id'];

  $query = $conn->prepare("DELETE FROM games WHERE id=$id");
  $query->execute();

  header("location: ../pages/admin.php?delete=success");
  exit();