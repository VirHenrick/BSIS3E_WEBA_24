<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/edituse.css">
</head>
<body>
  
<?php include PATH."partials/header.php" ?>

<div class="container position-absolute top-50 start-50 translate-middle">
  <form action="" method="POST" class="mt-5 w-50 mx-auto">
<div class="mb-2">
  <label for="">First Name</label>
  <input name="firstname" value="<?= $users->firstname ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Last Name</label>
  <input name="lastname" value="<?= $users->lastname ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Email</label>
  <input name="email" value="<?= $users->email ?>" type="email" class="form-control">
</div>
<div class="mb-2">
  <label for="">Password</label>
  <input name="password" value="<?= $users->password ?>" type="password" class="form-control">
</div>
<div class="mb-2">
  <label for="">Role</label>
  <select name="" >
    <option value="">Select Role</option>
    <option <?= $users->role == "Admin" ? 'selected' : ''; ?> value="Admin">Licensed Pharmacists</option>
    <option <?= $users->role == "Staff" ? 'selected' : ''; ?> value="Staff">Assistant Pharmacists</option>
  </select>
</div>
<button  class="btn btn-primary">Update</button>
</div>

<?php include PATH."partials/footer.php" ?>

</body>
</html>