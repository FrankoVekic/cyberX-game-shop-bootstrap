<?php require_once '../includes/branched/config.php'?>
<?php require_once '../includes/branched/adminProtection.php'; ?>
<?php require_once '../core/Config.php';?>

<?php 
$name = '';
$price = '';
$quantity = '';
$change = false;
$id=0;

if(isset($_GET['action'])){
  if($_GET['action'] == "change"){
    $change = true;
    $id=$_GET['id'];
    $query = $conn->prepare("SELECT * FROM games WHERE id = $id;");
    $query->execute();
    $gamess = $query->fetch();

      if(!$games){
          header('location:' . $appLink . 'pages/admin.php?action=error');
          exit();
      }
      else {
          $name = $gamess['name'];
          $price = round($gamess['price']);
          $quantity = round($gamess['quantity']);
      }
  }
}
if(isset($_POST['save'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    
    $query = $conn->prepare("UPDATE games SET name= '$name', price =$price,quantity=$quantity WHERE id = $id;");
    $query->execute();
    header("location" .$appLink."pages/admin.php?edit=success");
    exit();
    }


