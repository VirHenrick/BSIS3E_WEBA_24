<h2>Delete Page</h2>
<?php include PATH."partials/header.php" ?>

<div class="container">
  <form action="" method="POST" class="mt-5 w-50 mx-auto">
      <h2>Create User</h2>
<div class="mb-2">
  <label for="">Firstname</label>
  <input name="firstname" disabled value="<?= $user->firstname ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Lastname</label>
  <input name="lastname" disabled value="<?= $user->lastname ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Email</label>
  <input name="email" disabled value="<?= $user->email ?>" type="email" class="form-control">
</div>
<div class="mb-2">
  <label for="">Password</label>
  <input name="password" disabled value="<?= $user->password ?>" type="password" class="form-control">
</div>
<button name="delete" type="submit" class="btn btn-danger">Delete</button>
</div>

<?php include PATH."partials/footer.php" ?>
