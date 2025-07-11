<?php
include("db.php");

// Obtener la tarea a editar
if (isset($_GET['id'])) {
    $task_id = mysqli_real_escape_string($connection, $_GET['id']);
    $query = "SELECT * FROM task WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $task_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) == 1) {
        $task = mysqli_fetch_assoc($result);
        $title = $task['title'];
        $description = $task['description'];
    } else {
        $_SESSION['message'] = 'Task not found';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        exit();
    }
}

// Procesar actualización
if (isset($_POST['update_task'])) {
    $task_id = mysqli_real_escape_string($connection, $_GET['id']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);

    $query = "UPDATE task SET title = ?, description = ? WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $title, $description, $task_id);
    
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = 'Task Updated Successfully';
        $_SESSION['message_type'] = 'success';
    } else {
        $_SESSION['message'] = 'Error updating task';
        $_SESSION['message_type'] = 'danger';
    }
    
    header("Location: index.php");
    exit();
}
?>

<?php include("includes/header.php") ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo htmlspecialchars($task_id); ?>" method="POST">
                    <div class="form-group mb-3">
                        <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>" class="form-control" placeholder="Update Title" autofocus required>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="description" rows="2" class="form-control" placeholder="Update Description" required><?php echo htmlspecialchars($description); ?></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning" name="update_task">Update Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>