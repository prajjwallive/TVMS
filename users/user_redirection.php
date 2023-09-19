<?php
session_start();
$_SESSION['user_role'] = $_POST['info'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $info = isset($_POST['info']) ? $_POST['info'] : 'No info received';
    echo "Info received: $info"; // Debugging message
    if ($info === 'Admin') {
        header("Location: ../admin/dashboard.php");
        exit;
    } else {
        header("Location: ../Security/logout.php");
        exit;
    }
}
?>