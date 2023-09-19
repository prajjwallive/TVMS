<!DOCTYPE html>
<html lang="en">

<?php
include("../Security/user_session_validation.php");
?>


<?php

include("../Security/Connection.php");

$providedUid = $_SESSION['user_id']; // Replace with the actual Uid you want to retrieve

// Your SQL query
$sql = "SELECT * FROM creds
        NATURAL JOIN contact
        NATURAL JOIN users
        WHERE Uid = $providedUid";

// Execute the SQL query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Assign values to variables
    $uid = $row['Uid'];
    $email = $row['Email'];
    $firstName = $row['FName'];
    $lastName = $row['SName'];
    $address = $row['Address'];
    $dob = $row['DOB'];
    $gender = $row['Gender'];
    $phone = $row['Phone'];
    $center = $row['Center'];
    $role = $row['Role'];
} else {
    echo "User not found";
}
// Close the MySQLi connection
$conn->close();
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "$firstName" ?>
        <?php echo "$lastName" ?>
    </title>
    <!-- Add Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">
    <div class="max-w-xl mx-auto bg-white p-12 rounded-lg shadow-lg">
        <!-- User Profile Image -->
        <div class="flex justify-center">
            <img src="../images/iskcon_logo.jpg" alt="User Profile Image"
                class="w-40 h-40 rounded-full border-4 border-indigo-500">
        </div>

        <!-- User Profile Information -->
        <div class="mt-6 text-center">
            <h1 class="text-3xl font-semibold text-gray-800">Name:
                <?php echo " $firstName " ?>
                <?php echo "$lastName " ?>
            </h1>
            <p class="text-gray-600">DOB:
                <?php echo "$dob " ?>
            </p>
            <p class="text-gray-600">Gender:
                <?php echo "$gender" ?>
            </p>
        </div>

        <!-- Contact Information -->
        <div class="mt-6">
            <h2 class="text-xl font-semibold">Contact Information</h2>
            <ul class="mt-2">
                <li class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M10.5 18.75a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" />
                        <path fill-rule="evenodd"
                            d="M8.625.75A3.375 3.375 0 005.25 4.125v15.75a3.375 3.375 0 003.375 3.375h6.75a3.375 3.375 0 003.375-3.375V4.125A3.375 3.375 0 0015.375.75h-6.75zM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 017.5 19.875V4.125z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="text-gray-600">Phone:
                        <?php echo "$phone" ?>
                    </span>
                </li>
                <li class="flex items-center space-x-2 mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                        <path
                            d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                    </svg>

                    <span class="text-gray-600">Email:
                        <?php echo "$email" ?>
                    </span>
                </li>
                <li class="flex items-center space-x-2 mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="text-gray-600">Address:
                        <?php echo "$address" ?>
                    </span>
                </li>
                <li class="flex justify-center space-x-2 mt-2">
                    <a href="User_update.php">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Update Info
                        </button>
                    </a>
                </li>
                <li class="flex justify-center space-x-2 mt-2">
                    <form action="user_redirection.php" method="POST">
                        <input type="hidden" name="info" value="<?php echo trim($role); ?>">
                        <button type="submit" class="bg-red-500  text-white font-bold py-2 px-4 rounded">
                            Exit
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>