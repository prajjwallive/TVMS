<?php
include('user_session_validation.php');
include('Connection.php');
include("sweetjs.php");

// Check if the operation is an update or delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $operation = $_POST['submit'];

        // If the operation is 'update'
        if ($operation === 'update') {
            // Get the data from the POST request
            $Uid = $_POST['id'];
            $fn = $_POST['first-name'];
            $ln = $_POST['second-name'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            // Initialize an array to track the updates and their corresponding SQL statements
            $updates = array();

            if (!empty($fn)) {
                $updates[] = "users.FName = '$fn'";
            }

            if (!empty($ln)) {
                $updates[] = "users.SName = '$ln'";
            }

            if (!empty($dob)) {
                $updates[] = "users.DOB = '$dob'";
            }

            if (!empty($email)) {
                $updates[] = "creds.Email = '$email'";
            }

            if (!empty($phone)) {
                $updates[] = "contact.Phone = '$phone'";
            }

            if (!empty($address)) {
                $updates[] = "contact.Address = '$address'";
            }

            // Check if there are fields to update
            if (!empty($updates)) {
                // Construct the UPDATE query
                $update_query = "UPDATE users
                                 JOIN creds ON users.Uid = creds.Uid
                                 JOIN contact ON users.Uid = contact.Uid
                                 SET " . implode(", ", $updates) . " WHERE users.Uid = $Uid";

                // Execute the update query
                if ($conn->query($update_query) === TRUE) {
                    // Handle success
                    ?>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Updated.',
                            text: 'Successful!',
                            timer: 1500
                        }).then(function () {
                            window.location = "../users/users.php";
                        })
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            footer: '<a href="">Why do I have this issue?</a>'
                        }).then(function () {
                            window.location = "../users/users.php";
                        })
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No Field Provied!',
                    }).then(function () {
                        window.location = "../users/users.php";
                    })
                </script>
                <?php
            }
        }
    }
}

// Close the database connection
$conn->close();
?>