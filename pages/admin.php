<?php require_once '../includes/branched/config.php'?>
<?php require_once '../includes/branched/adminProtection.php'; ?>
<?php require_once '../core/Config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../includes/branched/head.php'; ?>
</head>
<body>
    <?php require_once '../includes/branched/header.php'; ?>

    <table class="table table-striped" style="margin-top: 150px;">
  <thead>
    <tr>
      <th scope="col">Game ID</th>
      <th scope="col">Game name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php Config::connect();?>
  <?php foreach ($games as $product): ?>
    <tr>
      <td><?php echo $product['id']; ?></td>
      <td><?php echo $product['name']; ?></td>
      <td><?php echo $product['price']; ?></td>
      <td><?php echo $product['quantity']; ?></td>
      <td>
      <a href="../core/change.php" class="edit" title="Edit"><i class="material-icons">&#xE254;</i></a>
      <a href="../core/delete.php?id=<?=$product['id']?>" class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<hr>
<br><br>
<h1>Add new game to database!</h1>
<hr>
<form class="form" method="POST" action="../core/newGame.php">
  <div class="form-group">
    <label for="name">Game name</label>
    <input type="text" class="form-control" name="name" placeholder="Game name">
  </div>
  <div class="form-group">
    <label for="name">Price</label>
    <input type="number" class="form-control" name="price" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="name">Quantity</label>
    <input type="number" class="form-control" name="quantity" placeholder="Quantity">
  </div>
  <br>
  <button type="submit" name="add" class="btn btn-primary">Add</button>
</form>
<br>
    <?php require_once '../includes/branched/javascript.php'; ?>
    <?php require_once '../includes/branched/footer.php'; ?>
</body>
</html>  