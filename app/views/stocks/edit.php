<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Stocks</title>
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/edstock.css">
</head>
<body>
  
<?php include PATH."partials/header.php" ?>

<div class="container position-absolute top-50 start-50 translate-middle">
  <form action="" method="POST" class="mt-5 w-50 mx-auto">
      <h2>Edit Medicine</h2>


<div class="mb-2">
  <label for="">Medicine Name</label>
  <input name="Medicine_Name" value="<?= $stock->Medicine_Name ?>" type="text" class="form-control" required>
</div>
<div class="mb-2">
  <label for="">Expiry Date
  </label>
  <input name="Expiry_Date" value="<?= $stock->Expiry_Date ?>" type="text" class="form-control" required>
</div>
<div class="mb-2">
  <label for="">Number of Stocks</label>
  <input name="Number_of_Stocks" value="<?= $stock->Number_of_Stocks ?>" type="text" class="form-control" required>
</div>
<div class="mb-2">
  <label for="">Doctor Prescription</label>
  <input name="Doctor_Prescription_Required" value="<?= $stock->Doctor_Prescription_Required ?>" type="text" class="form-control" required>
</div>
<div class="mb-2">
  <label for="">Brand</label>
  <input name="Brand" value="<?= $stock->Brand ?>" type="text" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</div>

<?php include PATH."partials/footer.php" ?>

</body>
</html>