<!-- Sweet JS CDN in line no 13-14 -->
<?php
include('session_validation.php');
include 'Connection.php';
include 'sweetjs.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_id = $_POST["Book-Id"];

    // Retrieve the book information to be updated from the form fields
    $new_name = $_POST["Book-name"];
    $new_price = $_POST["Book-price"];
    $new_language = $_POST["Book_Language"];
    $new_image = $_FILES['image']['name'];
    $new_type = $_POST['type'];
    $tempname = $_FILES['image']['tmp_name'];

    // Check if the book ID (Bid) exists in the database
    $check_stmt = $conn->prepare("SELECT COUNT(*) as count, `Image` FROM books WHERE Bid = ?");
    $check_stmt->bind_param("s", $book_id);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    $check_row = $check_result->fetch_assoc();

    if ($check_row['count'] > 0) {
        // Book with the specified ID exists
        $old_image = $check_row['Image'];

        // Check if a new image is uploaded and replace the old image
        if (!empty($new_image) && move_uploaded_file($tempname, "../images/Books/" . $new_image)) {
            // Delete the old image file if it exists
            if (!empty($old_image) && file_exists("../images/Books/" . $old_image)) {
                unlink("../images/Books/" . $old_image);
            }
        } else {
            $new_image = $old_image; // Keep the old image if no new image is uploaded
        }

        // Update the book information in the database
        $update_sql = "UPDATE books SET ";
        $update_params = array();

        if (!empty($new_name)) {
            $update_sql .= "`Name`=?, ";
            $update_params[] = $new_name;
        }
        if (!empty($new_price)) {
            $update_sql .= "`Price`=?, ";
            $update_params[] = $new_price;
        }
        if (!empty($new_language)) {
            $update_sql .= "`Language`=?, ";
            $update_params[] = $new_language;
        }
        if (!empty($new_type)) {
            $update_sql .= "`Type`=?, ";
            $update_params[] = $new_type;
        }
        if (!empty($new_image)) {
            $update_sql .= "`Image`=?, ";
            $update_params[] = $new_image;
        }

        // Remove the trailing comma and space
        $update_sql = rtrim($update_sql, ", ");

        $update_sql .= " WHERE `Bid`=?";
        $update_params[] = $book_id;

        $update_stmt = $conn->prepare($update_sql);

        // Bind parameters dynamically
        $bind_params = str_repeat("s", count($update_params));
        $update_stmt->bind_param($bind_params, ...$update_params);

        if ($update_stmt->execute()) {
            ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Wow',
                    text: 'Update Successful!',
                }).then(function () {
                    window.location = "../admin/book_update.php";
                })
            </script>
            <?php
            // header("Location: ../admin/books_upload.php");
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                }).then(function () {
                    window.location = "../admin/book_update.php";
                })
            </script>
            <?php
        }

        $update_stmt->close();
    } else {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Book Doesnt Exist!',
            }).then(function () {
                window.location = "../admin/book_update.php";
            })
        </script>
        <?php
    }

    $check_stmt->close();
}

// Close the database connection
$conn->close();
?>