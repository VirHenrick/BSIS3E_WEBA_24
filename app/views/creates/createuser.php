<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/crtuse.css">
</head>
<body>
    
<?php include PATH."partials/header.php" ?>

<div class="container position-absolute top-50 start-50 translate-middle">

<form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Create Users</h2>

        <?php if (!empty($errors)): ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php foreach ($errors as $error): ?>
        <?= $error . "<br>" ?>
    <?php endforeach; ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php endif; ?>


<input type="hidden" name="token">

<div class="mb-2">
<label for="">First Name</label>
<input name="firstname" type="text" value="<?= get_var('firstname') ?>" class="form-control">
</div>

<div class="mb-2">
<label for="">Last Name</label>
<input name="lastname" type="text" value="<?= get_var('lastname') ?>" class="form-control">
</div>

<div class="mb-2">
<label for="">Email</label>
<input name="email" type="email" value="<?= get_var('email') ?>" class="form-control">
</div>

<div class="mb-2">
<label for="">Password</label>
<input name="password"  type="password" value="<?= get_var('password') ?>" class="form-control">
</div>

<div class="mb-2">
<label for="">Role</label>
<select name="role" class = "form-control">
<option value="">Select Role</option>
<option <?= get_select('role', 'Admin') ?> value="Admin">Licensed Pharmacists</option>
<option <?= get_select('role', 'Staff') ?> value="Staff">Assistant Pharmacists</option>
</select>
</div>

<button class="btn btn-primary" >Create</button>

</div>

<?php include PATH."partials/footer.php" ?>

</body>
</html>