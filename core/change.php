<?php require_once '../includes/branched/config.php'?>
<?php require_once '../includes/branched/adminProtection.php'; ?>
<?php require_once '../core/Config.php';?>
<?php require_once '../core/newGame.php'; ?>
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
  <form method="POST">
  <tbody>
  <?php Config::connect();?>
  <?php foreach ($games as $product): ?>
    <tr>
      <td><input type="number" name="gameid" value="<?php echo $product['id'];?>"></td>
      <td><input type="text" name="gamename" value="<?php echo $product['name']; ?>"></td>
      <td><input type="number" name="gameprice" value="<?php echo $product['price']; ?>"></td>
      <td><input type="number" name="gamequantity" value="<?php echo $product['quantity']; ?>"></td>
      <td>
      <button type="submit" name="save" class="button">Save</button>
      <button type="submit" name="cancel" class="button">Cancel</button>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  <form>
</table>
    <?php require_once '../includes/branched/javascript.php'; ?>
    <?php require_once '../includes/branched/footer.php'; ?>
</body>
</html>  