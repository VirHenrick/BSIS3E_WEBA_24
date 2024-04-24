<?php include PATH."partials/header.php" ?>

    <div class="container">

        <form action="" method="POST" class="mt-5 w-50 mx-auto">
            <h2>Create Task</h2>
    <div class="mb-2">
        <label for="">Task Name</label>
        <input name="task_name" type="text" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Task Description</label>
        <input name="task_description" type="text" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Task Status</label>
        <select name="task_status" id="status">
                <option value="Done">Done</option>
                <option value="Not Done">Not Done</option>
                <option value="Ongoing">Ongoing</option>
          </select>
    </div>
    <div class="mb-2">
        <label for="">Task Due</label>
        <input name="task_due" type="date" class="form-control">
    </div>
    
    <button name="create" type="submit" class="btn btn-primary" >Create</button>
    
</div>
<?php include PATH."partials/footer.php" ?>