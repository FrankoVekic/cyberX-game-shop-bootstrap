<?php require_once '../includes/branched/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../includes/branched/head.php'; ?>
</head>
<body>
    <?php require_once '../includes/branched/header.php'; ?>
    <div class="masthead  text-center">
        <div class="container d-flex align-items-center flex-column"> 
            <br><br><br><br>
            <h1 class="masthead-heading text-uppercase mb-0"><?=$appName;?></h1>
            <div class="divider-custom divider-light"></div>
            <p class="masthead-subheading font-weight-light mb-0">Where the magic happens</p>
            </div>
        <br>
    <div>
        <a href="register.php" class="btn btn-secondary btn-lg">Register</a>
    </div>
</div>
    <?php require_once '../includes/branched/javascript.php'; ?>
    <?php require_once '../includes/branched/footer.php'; ?>
</body>
</html>