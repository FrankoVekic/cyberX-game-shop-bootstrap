<?php require_once '../includes/branched/config.php';?>
<?php require_once '../includes/branched/adminProtection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../includes/branched/head.php'; ?>
</head>
<body>
    <?php require_once '../includes/branched/header.php'; ?>

    <div class="header" style="margin-top: 150px;">
    <h1 class="fw-bolder" style="text-align: center;">Order some games!</h1>
    </div>
    <div class="container-lg" style="margin-top: 10px;">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Make your order </h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Game</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Console</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Call of Duty 4</td>
                        <td>29.99</td>
                        <td>10</td>
                        <td>PC</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Minecraft</td>
                        <td>19.99</td>
                        <td>10</td>
                        <td>PC</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Apex Legends</td>
                        <td>25.99</td>
                        <td>10</td>
                        <td>PC</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>      
                </tbody>
            </table>
        </div>
    </div>
</div>  
    <?php require_once '../includes/branched/javascript.php'; ?>
    <?php require_once '../includes/branched/footer.php'; ?>
</body>
</html>  