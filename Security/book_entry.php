<?php
include 'session_validation.php';
include 'Connection.php';
include("sweetjs.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bid = $_POST["Book-Id"]; // Use the correct form field name (Book-Id) instead of "bid"
    $name = $_POST["Book-name"];
    $price = $_POST["Book-price"];
    $lang = $_POST["Book_Language"];
    $type = $_POST["type"];
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name']; // Use the correct file array name ("image")
    $folder = "../images/Books/" . $filename;
    // Check if the book ID (Bid) already exists in the database
    $check_stmt = $conn->prepare("SELECT COUNT(*) as count FROM books WHERE Bid = ?");
    $check_stmt->bind_param("s", $bid);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    $check_row = $check_result->fetch_assoc();

    if ($check_row['count'] > 0) {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error.',
                text: 'Duplicate Entry',
                timer: 1500
            }).then(function () {
                window.location = "../admin/books_upload.php";
            })
        </script>
        <?php
    } else {
        // Proceed with inserting the book information into the database
        $insert_stmt = $conn->prepare("INSERT INTO books (`Bid`, `Name`, `Price`, `Language`, `Type`, `Image`) VALUES (?, ?, ?, ?, ?, ?)");
        $insert_stmt->bind_param("ssssss", $bid, $name, $price, $lang, $type, $filename);

        if (move_uploaded_file($tempname, $folder)) {
            $insert_stmt->execute();

            ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Updated.',
                    text: 'Successful!',
                    timer: 1500
                }).then(function () {
                    window.location = "../admin/books_upload.php";
                })
            </script>
            <?php
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error Try again.',
                    text: 'Please try again later!',
                    timer: 1500
                }).then(function () {
                    window.location = "../admin/books_upload.php";
                })
            </script>
            <?php
        }

        $insert_stmt->close();
    }

    $check_stmt->close();
}

// Close the database connection
$conn->close();
?>