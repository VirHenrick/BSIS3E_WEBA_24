<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/userdesu.css">
</head>
<body>
    
<?php include PATH."partials/header.php" ?>

<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="mt-5 d-flex justify-content-between align-items-center">
        <h2>User Management</h2>
    </div>

    <a href="<?=ROOT?>/createusers/create" class="btn btn-primary">Add</a>

    <table class="table table-striped mt-3 health-themed-table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php if($rows != null) { ?>
            <?php foreach($rows as $item) { ?>
                <tr>
                    <td><?= $item->firstname ?></td>
                    <td><?= $item->lastname ?></td>
                    <td><?= $item->email ?></td>
                    <td>
                        <a href="<?=ROOT?>/createusers/edit/<?= $item->id?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="<?=ROOT?>/createusers/delete/<?= $item->id?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
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