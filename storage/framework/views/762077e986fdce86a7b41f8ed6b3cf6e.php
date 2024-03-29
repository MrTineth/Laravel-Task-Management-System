<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Management System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Your content here -->
    <br>
    <br>
    <div class="container text-center">
        <h1><i class="bi bi-clipboard2-heart"></i> Task Management System</h1>

        <h5><i class="bi bi-plus-square"></i> Add Your Task Here</h5>
        <br>

        <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>
        <!-- Rest of your content -->
    </div>

    <div class="container">
        <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary mb-3">Create Task</a>
        <a href="<?php echo e(route('taskshow')); ?>" class="btn btn-secondary mb-3">Show Completed Tasks</a>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($task->title); ?></td>
                    <td><?php echo e($task->description); ?></td>
                    <td><?php echo e($task->priority); ?></td>
                    <td><?php echo e($task->due_date); ?></td>
                    <td>
                        <a href="<?php echo e(route('tasks.edit', $task->id)); ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this task?')">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>

                        <?php if(!$task->completed): ?>
                        <form action="<?php echo e(route('tasks.complete', $task->id)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-warning btn-sm">
                                <i class="fa fa-check"></i> Complete
                            </button>
                        </form>
                        <?php endif; ?>

                    </td>



                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH G:\Laravel\Task_Management_System\resources\views/tasks/index.blade.php ENDPATH**/ ?>