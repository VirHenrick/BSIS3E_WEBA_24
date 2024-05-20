<?php include PATH."staffp/staffh.php" ?>

</div>


<div class="container">

    <div class="mt-5 d-flex justify-content-between align-items-center">

        <div class="container">

            <div class="mt-5 d-flex justify-content-between align-items-center">
                <h2>Sales Management 
                </h2>
            </div>

            <table class="table table-striped mt-3">

                <tr>
                    <th>Medicine Name</th>
                    <th>Quantity</th>
                    <th>Customer Name</th>
                    <th>Total Price</th>
                </tr>

                <?php if ($sales != null) { ?>

                    <?php foreach ($sales as $item) { ?>

                        <tr>
                            <td><?= $item->Medicine_Name ?></td>
                            <td><?= $item->Quantity ?></td>
                            <td><?= $item->Customer_Name ?></td>
                            <td><?= $item->Total_Price ?></td>
                        </tr>
                    <?php } ?>

                <?php } else { ?>
                    <tr>
                        <td colspan="3">
                            <h5>No record found.<h5>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a href="<?= ROOT ?>/staffs/create" class="btn btn-success">Add Sales</a>


            <div class="mt-5 d-flex justify-content-between align-items-center">
                <h2>Stock Management</h2>

            </div>

            <table class="table table-striped mt-3">

                <tr>
                    <th>Medicine Name</th>
                    <th>Expiry Date</th>
                    <th>Number of Stocks</th>
                    <th>Doctor Prescription Required</th>
                    <th>Price</th>
                    <th>Brand</th>
                </tr>

                <?php if ($stocks != null) { ?>

                    <?php foreach ($stocks as $item) { ?>

                        <tr>
                            <td><?= $item->Medicine_Name ?></td>
                            <td><?= $item->Expiry_Date ?></td>
                            <td><?= $item->Number_of_Stocks ?></td>
                            <td><?= $item->Doctor_Prescription_Required ?></td>
                            <td><?= $item->Price ?></td>
                            <td><?= $item->Brand ?></td>
                        </tr>
                    <?php } ?>

                <?php } else { ?>
                    <tr>
                        <td colspan="3">
                            <h5>No record found.<h5>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <br>
            <br>
            <br>
        </div>
        <?php include PATH."staffp/staffp.php" ?>