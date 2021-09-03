<?php require_once '../includes/branched/config.php'?>
<?php require_once '../includes/branched/adminProtection.php'; ?>
<?php require_once '../core/Config.php';?>
<?php require_once '../core/change.php'?>
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
      <th scope="col">Game name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($games as $product): ?>
      <td><?php echo $product['name']; ?></td>
      <td><?php echo $product['price']; ?></td>
      <td><?php echo $product['quantity']; ?></td>
      <td>
      <a href="../pages/admin.php?action=change&id=<?=$product['id']?>" name="edit" class="btn btn-warning" title="Edit" style="margin-bottom: 4px;">Edit</a>
      <a href="../core/delete.php?id=<?=$product['id']?>" name="delete" class="btn btn-danger" title="Delete">Delete</a>
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
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="form-group">
    <label for="name">Game name</label>
    <input type="text" class="form-control" value="<?php echo $name;?>" name="name" placeholder="Game name">
  </div>
  <div class="form-group">
    <label for="name">Price</label>
    <input type="number" class="form-control" value="<?php echo $price;?>" name="price" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="name">Quantity</label>
    <input type="number" class="form-control" value="<?php echo $quantity;?>" name="quantity" placeholder="Quantity">
  </div>
  <br>
  <?php 
      if($change == true):
    ?>
    <button type="submit" name="save" class="btn btn-success">Save</button>
    <button type="submit" name="cancel" class="btn btn-danger">Cancel</button>
    <?php else: ?>
      <button type="submit" name="upload" class="btn btn-primary">Upload</button>
      <?php endif; ?>
</form>
<br>
    <?php require_once '../includes/branched/javascript.php'; ?>
    <?php require_once '../includes/branched/footer.php'; ?>
</body>
</html>  