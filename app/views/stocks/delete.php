<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Stock</title>
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/delstock.css">
</head>
<body>
  
<?php include PATH."partials/header.php" ?>

<div class="container position-absolute top-50 start-50 translate-middle">
  <form action="" method="POST" class="mt-5 w-50 mx-auto">
      <h2>Delete Task</h2>
<div class="mb-2">
  <label for="">Medicine Name</label>
  <input name="Medicine_Name" disabled value="<?= $stock->Medicine_Name ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Expiry Date</label>
  <input name="Expiry_Date" disabled value="<?= $stock->Expiry_Date ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Number of Stocks</label>
  <input name="Number_of_Stocks" disabled value="<?= $stock->Number_of_Stocks ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Doctor Prescription Required</label>
  <input name="Doctor_Prescription_Required" disabled value="<?= $stock->Doctor_Prescription_Required ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Brand</label>
  <input name="Brand" disabled value="<?= $stock->Brand ?>" type="text" class="form-control">
</div>
<input type="hidden" name="id" value ="<?= $stock->id ?>">
<button  type="submit" class="btn btn-danger">Delete</button>
</div>

<?php include PATH."partials/footer.php" ?>

</body>
</html>



