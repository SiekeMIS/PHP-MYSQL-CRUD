<?php
include("db.php");

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $task_id";
    $result = mysqli_query($connection, $query);
    if ($result) {
        $_SESSION['message'] = 'Task deleted successfully';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
}
?>