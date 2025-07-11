<?php 
include("db.php");
include("includes/header.php");
?>

<div class="container mt-5">
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= htmlspecialchars($_SESSION['message_type']) ?> alert-dismissible fade show">
            <?= htmlspecialchars($_SESSION['message']) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php } ?>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100" name="save_task">Save Task</button>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table task-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM task";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['title']) ?></td>
                            <td><?= htmlspecialchars($row['description']) ?></td>
                            <td><?= htmlspecialchars($row['created_at']) ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-edit"></i> 
                                </a>
                                <a href="delete_task.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> 
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>