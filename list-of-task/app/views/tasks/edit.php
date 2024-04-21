<h2>Edit Page</h2>
<?php include PATH."partials/header.php" ?>

<div class="container">
  <form action="" method="POST" class="mt-5 w-50 mx-auto">
      <h2>Edit User</h2>
<div class="mb-2">
  <label for="">Firstname</label>
  <input name="task_name" value="<?= $task->task_name ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Lastname</label>
  <input name="task_description" value="<?= $task->task_description ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Task Status</label>
  <input name="task_status" value="<?= $task->task_status ?>" type="task_status" class="form-control">
</div>
<div class="mb-2">
  <label for="">Task Due</label>
  <input name="task_due" value="<?= $task->task_due ?>" type="task_due" class="form-control">
</div>
<button name="update" type="submit" class="btn btn-primary">Update</button>
</div>

<?php include PATH."partials/footer.php" ?>
