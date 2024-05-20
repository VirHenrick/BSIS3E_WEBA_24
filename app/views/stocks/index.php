<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/dashdesu.css">
</head>
<body>

<?php include PATH."partials/header.php" ?>

<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="mt-5 d-flex justify-content-between align-items-center">
        <h2>Stock Management</h2>
    </div>

    <table class="table table-striped mt-3 health-themed-table">
        <tr>
            <th>Medicine Name</th>
            <th>Expiry Date</th>
            <th>Number of Stocks</th>
            <th>Doctor Prescription Required</th>
            <th>Price</th>
            <th>Brand</th>
            <th>Action</th>
        </tr>
        <?php if($stocks != null) { ?>
            <?php foreach($stocks as $item){ ?>
                <tr>
                    <td><?= $item->Medicine_Name?></td>
                    <td><?= $item->Expiry_Date ?></td>
                    <td><?= $item->Number_of_Stocks ?></td>
                    <td><?= $item->Doctor_Prescription_Required ?></td>
                    <td><?= $item->Price ?></td>
                    <td><?= $item->Brand ?></td>
                    <td>
                        <a href="<?=ROOT?>/stocks/edit/<?= $item->id?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="<?=ROOT?>/stocks/delete/<?= $item->id?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="7"><h5>No record found.<h5></td>
            </tr>
        <?php } ?>
    </table>
    <a href="<?=ROOT?>/stocks/create" class="btn btn-primary">Add</a>
</div>

<?php include PATH."partials/footer.php" ?>

</body>
</html>
