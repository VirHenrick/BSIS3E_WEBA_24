<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Admin</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/salesadmin.css"> 
</head>
<body>

<?php include PATH."partials/header.php" ?>

<div class="container position-absolute top-50 start-50 translate-middle">

    <div class="mt-5 d-flex justify-content-between align-items-center">
        <h2>Sales Management</h2>
    </div>

    <a href="<?=ROOT?>/sales/create" class="btn btn-success">Add</a>

    <table class="table table-striped mt-3 health-themed-table">
        <tr>
            <th>Medicine Name</th>
            <th>Quantity</th>
            <th>Customer Name</th>
            <th>Total Price</th>
        </tr>

        <?php if($sales != null) { ?>
            <?php foreach($sales as $item){ ?>
                <tr>
                    <td><?= $item->Medicine_Name ?></td>
                    <td><?= $item->Quantity ?></td>
                    <td><?= $item->Customer_Name ?></td>
                    <td><?= $item->Total_Price ?></td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="4"><h5>No record found.</h5></td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php include PATH."partials/footer.php" ?>

</body>
</html>
