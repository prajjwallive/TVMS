<?php
include("sweetjs.php");
// include("session_validation.php");  
include('Connection.php');
$fn = $_POST['first-name'];
$ln = $_POST['second-name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$center = $_POST['center'];
$newpass = $_POST['first-password'];
$password = $_POST['second-password'];
$address = $_POST['address'];

// Check if the email already exists
$email_check_query = "SELECT COUNT(*) as count FROM creds WHERE Email = '$email'";
$result = $conn->query($email_check_query);
$row = $result->fetch_assoc();
if ($row['count'] > 0) {
    ?>
    <script>
        var referringPage = "<?php echo $_SERVER['HTTP_REFERER']; ?>";
        Swal.fire({
            title: 'Email Already Exists',
            text: "The provided email address is already registered.",
            icon: 'error',
            showConfirmButton: false,
            timer: 2000
        }).then(function () {
            window.location = referringPage;
        })
    </script>
    <?php
} else {
    if ($newpass == $password) {
        $sql1 = "INSERT INTO creds(`Email`,`Pass`) VALUES('$email','$password')";
        if ($conn->query($sql1) === true) {
            $last_inserted_id = $conn->insert_id;
        }

        $sql2 = "INSERT INTO contact(`Center`,`Phone`,`Address`,`Uid`) VALUES ('$center','$phone','$address','$last_inserted_id')";
        $sql3 = "INSERT INTO users(`FName`,`SName`,`DOB`,`Gender`,`Uid`) VALUES ('$fn','$ln','$dob','$gender','$last_inserted_id')";
        if ($conn->query($sql2) === true && $conn->query($sql3) === true) {
            ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'You have been Registered',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location = "../admin/crud.php";
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
                    window.location = "../admin/admin_register.php";
                })
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            var referringPage = "<?php echo $_SERVER['HTTP_REFERER']; ?>";
            Swal.fire({
                title: 'Try Again?',
                text: "ID or Password didn't match!",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes!'
            }).then(function () {
                window.location = referringPage;
            })
        </script>
        <?php
    }
}

$conn->close();
?>
