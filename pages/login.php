<?php require_once '../includes/branched/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../includes/branched/head.php'; ?>
</head>
<body>
    <?php require_once '../includes/branched/header.php'; ?>
    <br><br><br>
<div class="row" style="margin-top: 150px;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="" method="">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">User name</label>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="First name" id="full_name" class="form-control" name="full-name">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="email_address" placeholder="Last name" class="form-control" name="email-address">
                                    </div>
                                </div>
                                <br>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Login
                                        </button>
                                        <p><a href="register.php">Don't have an account?</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
    <?php require_once '../includes/branched/javascript.php'; ?>
    <?php require_once '../includes/branched/footer.php'; ?>
</body>
</html>