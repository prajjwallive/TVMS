<?php
session_start();
$_SESSION['user_role'] = null;
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
}
?>