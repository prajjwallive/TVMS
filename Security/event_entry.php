<?php
// Database connection parameters
include 'Connection.php';
include 'sweetjs.php';

// Event details
$eventname = $_POST['event']; // Replace with the actual event name

// SQL query to check if an event entry for today already exists
$checkQuery = "SELECT COUNT(*) as count FROM `event` WHERE `Event_Date` = CURDATE()";
$checkResult = $conn->query($checkQuery);
if ($checkResult) {
    $row = $checkResult->fetch_assoc();
    $entryCount = $row['count'];
    if ($entryCount > 0) {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Entry is already made for today!',
                timer: 1500
            }).then(function () {
                window.location = "../admin/entry.php";
            })
        </script>
        <?php
        exit; // Exit the script if an entry already exists for today
    }
}

// SQL query to insert an event with the current date
$insertQuery = "INSERT INTO `event` (`Event_Name`, `Event_Date`) VALUES (?, CURDATE())";
$stmt = $conn->prepare($insertQuery);
$stmt->bind_param("s", $eventname);

if ($stmt->execute()) {
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
            title: 'Oops!',
            text: 'Failed to update.',
            timer: 1500
        }).then(function () {
            window.location = "../admin/entry.php";
        })
    </script>
    <?php
}

// Close database connection
$stmt->close();
$conn->close();
?>