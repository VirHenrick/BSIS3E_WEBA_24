<?php include "partials/header.php" ?>

<div class="container">
  <form action="" method="POST" class="w-50 mx-auto">
    <h3 class="mt-5 mb-4">User Registration</h3>
    <div class="mb-2">
      <label for="">First Name</label>
      <input name="firstname" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="lastname" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input name="email" type="email" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input name="password" type="password" class="form-control">
    </div>
    <button name="btnSubmit" type="submit" class="btn btn-primary">Submit</ button>
  </form>
</div>

<?php include "partials/footer.php" ?>