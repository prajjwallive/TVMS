<?php
include("../Security/sweetjs.php");
include('../Security/Connection.php');
if (isset($_POST['first-password']) && isset($_POST['second-password']) && isset($_POST['token'])) {
    $newpass = $_POST['first-password'];
    $password = $_POST['second-password'];
    $token = $_POST['token'];
    // Hash the token
    $token_hash = hash("sha256", $token);

    // Now, you can use $token_hash in your code
    // For example, you can echo it to check the hashed value
}
if ($newpass == $password) {
    // Use a prepared statement to update the password
    $sql1 = "UPDATE creds SET `Pass` = ? WHERE `reset_token_hash` = ?";
    $stmt = $conn->prepare($sql1);

    if ($stmt) {
        $stmt->bind_param("ss", $password, $token_hash);
        if ($stmt->execute()) {
            ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Password Changed',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location = "../login.php";
                })
            </script>
            <?php
        } else {
            ?>
            <script>
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Something Went Wrong!",
                    icon: 'warning',
                    showCancelButton: false,
                    timer: 1000
                }).then(function () {
                    window.location = "../login.php";
                })
            </script>
            <?php
        }
        $stmt->close();
    }
} else {
    ?>
    <script>
        var referringPage = "<?php echo $_SERVER['HTTP_REFERER']; ?>";
        Swal.fire({
            title: 'Try Again?',
            text: "Password didn't match!",
            icon: 'warning',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Yes!',
            timer : 1500
        })
    </script>
    <?php
}

$conn->close();
?>