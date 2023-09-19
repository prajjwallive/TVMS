<?php
session_start();
include('sweetjs.php');
include('Connection.php');
$username = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM creds WHERE Email = '$username' AND Pass = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    echo ("I am testing role");
    if ($row['Role'] === 'Admin') {
        $_SESSION['user_id'] = $row['Uid'];
        $_SESSION['user_role'] = $row['Role'];
        header("Location: ../admin/dashboard.php"); // Redirect to the dashboard or any other page
    } else {
        $_SESSION['user_id'] = $row['Uid'];
        header("Location: ../users/users.php");
    }
} else {
    ?>
    <script>
        Swal.fire({
            title: 'Are you sure?',
            text: "Password Wrong",
            icon: 'warning',
            showCancelButton: false,
            timer: 1500
        }).then(function () {
            window.location = "../login.php";
        })
    </script>
    <?php

}
$conn->close();
?>