<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Other meta tags and CSS links -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- Your content here -->
    <br>
    <br>
    <div class="container">
    <h1><i class="bi bi-clipboard2-minus"></i> Edit Task</h1>
    <form action="<?php echo e(route('tasks.update', $task->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($task->title); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?php echo e($task->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="priority">Priority</label>
            <select class="form-control" id="priority" name="priority" required>
                <option value="low" <?php if($task->priority == 'low'): ?> selected <?php endif; ?>>Low</option>
                <option value="medium" <?php if($task->priority == 'medium'): ?> selected <?php endif; ?>>Medium</option>
                <option value="high" <?php if($task->priority == 'high'): ?> selected <?php endif; ?>>High</option>
            </select>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="<?php echo e($task->due_date); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



<?php /**PATH G:\Laravel\Task_Management_System\resources\views/tasks/edit.blade.php ENDPATH**/ ?>