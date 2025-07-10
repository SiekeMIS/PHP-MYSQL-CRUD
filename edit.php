<?php
    include("db.php");

    if (isset($_GET['id'])) {
        $task_id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $task_id";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $task = mysqli_fetch_assoc($result);
            $title = $task['title'];
            $description = $task['description'];
        }
    }
    if (isset($_POST['update_task'])) {
        $task_id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE task SET title = '$title', description = '$description' WHERE id = $task_id";
        mysqli_query($connection, $query);

        $_SESSION['message'] = 'Task Updated Successfully';
        $_SESSION['message_type'] = 'warning';
        header("Location: index.php");
    }
?>

<?php include("includes/header.php") ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card-body">
                <form action="edit.php?id=<?php echo $$_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="update_title" value="<?php echo $title; ?>" class="form-control" placeholder="Update Title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="update_description" rows="2" class="form-control" placeholder="Update Description"><?php echo $description; ?></textarea>
                    </div>
                    <button class="btn btn-warning btn-block mt-2" type="button" onclick="location.href='task.php?id=<?php echo $task_id; ?>'">Cancel</button>
                    <input type="submit" class="btn btn-success btn-block mt-2" name="update_task" value="Update Task">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>

