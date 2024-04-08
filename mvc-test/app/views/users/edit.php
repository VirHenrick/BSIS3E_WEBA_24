<h2>Edit Page</h2>
<?php include PATH."partials/header.php" ?>

<div class="container">
  <form action="" method="POST" class="mt-5 w-50 mx-auto">
      <h2>Create User</h2>
<div class="mb-2">
  <label for="">Firstname</label>
  <input name="firstname" value="<?= $user->firstname ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Lastname</label>
  <input name="lastname" value="<?= $user->lastname ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Email</label>
  <input name="email" value="<?= $user->email ?>" type="email" class="form-control">
</div>
<div class="mb-2">
  <label for="">Password</label>
  <input name="password" value="<?= $user->password ?>" type="password" class="form-control">
</div>
<button name="edit" type="submit" class="btn btn-primary">Update</button>
</div>

<?php include PATH."partials/footer.php" ?>
