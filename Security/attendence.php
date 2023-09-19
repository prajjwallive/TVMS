<?php
include 'Connection.php';
include 'sweetjs.php';
$male = $_POST['Male'];
$female = $_POST['Female'];
// Get the current system date in 'Y-m-d' format
$currentDate = date("Y-m-d");

// Check if the date already exists in the visitors table
$query = "SELECT 1 FROM visitors WHERE Date = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $currentDate);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // The date does not exist, so insert Male and Female counts
    $maleCount = 10; // Replace with the actual Male count
    $femaleCount = 5; // Replace with the actual Female count

    $insertQuery = "INSERT INTO visitors (`Male`, `Female`, `Date`) VALUES (?, ?, ?)";
    $insertStmt = $conn->prepare($insertQuery);
    $insertStmt->bind_param("iis", $male, $female, $currentDate);
    $insertStmt->execute();

    ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Updated.',
            text: 'Successful!',
            timer: 1500
        }).then(function () {
            window.location = "../admin/entry.php";
        })
    </script>
    <?php
} else {
    ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'error',
            text: 'Entry for today already made!',
            timer: 1500
        }).then(function () {
            window.location = "../admin/entry.php";
        })
    </script>
    <?php
}

// Close the SELECT statement
$stmt->close();

// Check if $insertStmt is defined before attempting to close it
if (isset($insertStmt)) {
    $insertStmt->close();
}

// Close database connection
$conn->close();
?>