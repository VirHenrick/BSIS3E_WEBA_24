<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add stock</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/crtstock.css">
</head>
<body>
    
<?php include PATH."partials/header.php" ?>

<div class="container position-absolute top-50 start-50 translate-middle">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>ADD MEDICINE</h2>
<div class="mb-2">
    <label for="">Medicine Name</label>
    <input name="Medicine_Name" type="text" class="form-control" required>
</div>

<div class="mb-2">
    <label for="">Expiry Date</label>
    <input name="Expiry_Date" type="date" class="form-control" required>
</div>

<div class="mb-2">
    <label for="">Number of Stocks</label>
    <input name="Number_of_Stocks" type="number" class="form-control" required>
</div>

<div class="mb-2">
    <label for="">Doctor Prescription Required</label>
    <select name="Doctor_Prescription_Required" class = "form-control" required>
<option value="">Doctor Prescription</option>
<option <?= get_select('Doctor_Prescription_Required', 'Yes') ?> value="yes">Yes</option>
<option <?= get_select('Doctor_Prescription_Required', 'No') ?> value="no">No</option>
</select>
</div>

<div class="mb-2">
    <label for="">Price</label>
    <input name="Price" type="text" class="form-control" required>
</div>

<div class="mb-2">
    <label for="">Brand</label>
    <input name="Brand" type="text" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary" >Create</button>

</div>
<?php include PATH."partials/footer.php" ?>

</body>
</html>