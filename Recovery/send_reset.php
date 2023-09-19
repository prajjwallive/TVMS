<?php
$email = $_POST['email'];

include('../Security/Connection.php');
include('../Security/sweetjs.php');

// Check if the email exists in the database
$check_sql = "SELECT COUNT(*) as count FROM creds WHERE Email = ?";
$check_stmt = $conn->prepare($check_sql);
$check_stmt->bind_param("s", $email);
$check_stmt->execute();
$check_result = $check_stmt->get_result();
$check_row = $check_result->fetch_assoc();

// ...

if ((int) $check_row['count'] === 0) {
    // Email doesn't exist in the database, display a SweetAlert
    ?>
    <script>
        Swal.fire({
            title: 'Email Found',
            text: "Message Sent successfully.",
            icon: 'success',
            showConfirmButton: false,
            timer: 2000
        }).then(function () {
            window.location = "../forget_pass.php"; // Adjust this to the desired redirect page
        });
    </script>
    <?php
} else {
    // Email exists, proceed with the update
    $token = bin2hex(random_bytes(16));
    $token_hash = hash("sha256", $token);
    $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

    // Prepare and execute the update query
    $sql = "UPDATE creds
            SET reset_token_hash = ?,
            reset_token_expires_at = ? 
            WHERE Email = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $token_hash, $expiry, $email);
    $stmt->execute();

    // Close the database connection
    $conn->close();

    // Initialize and configure the email object
    $mail = require __DIR__ . "/mailer.php"; // Make sure the mailer.php file is properly configured
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END
    Click <a href="localhost/Recovery/verification.php?token=$token">here</a>
    to reset your password
    END;

    try {
        $mail->send();
        ?>
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Mail sent successfully',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
                window.location = "../login.php"; // Adjust this to the desired redirect page
            });
        </script>
        <?php
    } catch (Exception $e) {
        ?>
        <script>
            Swal.fire({
                position: 'try again',
                icon: 'error',
                title: 'Token message sent failed',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
                window.location = "../forget_pass.php"; // Adjust this to the desired redirect page
            });
        </script>
        <?php
    }
}
?>