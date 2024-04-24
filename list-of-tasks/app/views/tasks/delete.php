
<?php include PATH."partials/header.php" ?>

<div class="container">
  <form action="" method="POST" class="mt-5 w-50 mx-auto">
      <h2>Delete Task</h2>
<div class="mb-2">
  <label for="">Task Name</label>
  <input name="task_name" disabled value="<?= $task->task_name ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Task Description</label>
  <input name="task_description" disabled value="<?= $task->task_description ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Task Status</label>
  <input name="task_status" disabled value="<?= $task->task_status ?>" type="text" class="form-control">
</div>
<div class="mb-2">
  <label for="">Task Due</label>
  <input name="task_due" disabled value="<?= $task->task_due ?>" type="text" class="form-control">
</div>
<button name="delete" type="submit" class="btn btn-danger">Delete</button>
</div>

<?php include PATH."partials/footer.php" ?>
