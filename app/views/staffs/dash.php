<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
</head>
<body>
    
<?php include PATH."staffp/staffh.php" ?>
    <div class = "container">

        <div class = "mt-5 d-flex justify-content-between align-items-center" >
            <h2>Stock Management</h2>
           
        </div>

        <table class = "table table-striped mt-3">

        <tr>
            <th>Medicine Name</th>
            <th>Expiry Date</th>
            <th>Number of Stocks</th>
            <th>Doctor Prescription Required</th>
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
            <td><?= $item->Brand ?></td>
        </tr>
        <?php }?>

        <?php } else { ?>
            <tr>
                <td colspan="3"><h5>No record found.<h5></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <?php include PATH."staffp/staffp.php" ?>

</body>
</html>