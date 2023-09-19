<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title> ISCKON Chitwan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>

<body class="overflow-x-hidden antialiased">
    <?php

    include("../Security/user_session_validation.php");
    ?>


    <?php
    include("../Security/Connection.php");

    $providedUid = $_SESSION['user_id']; // Replace with the value you want to retrieve
    
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
        $secondName = $row['SName'];
        $address = $row['Address'];
        $dob = $row['DOB'];
        $gender = $row['Gender'];
        $phone = $row['Phone'];
        $role = $row['Role'];
    } else {
        echo "User not found";
    }
    // Close the MySQLi connection
    $conn->close();
    ?>
    <!-- Completion of fetch -->
    <!-- Update Form -->
    <div class="p-4 sm:ml-64">
        <div class="bg-white border width-auto rounded-lg px-8 py-6 mx-auto my-8 max-w-2xl">
            <h2 class="text-2xl font-medium mb-4 text-center">Update User Profile</h2>
            <form method="post" action="../Security/valid_user_update.php">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2"> First Name</label>
                    <input type="text" id="name" name="first-name" placeholder="<?php echo "$firstName" ?>"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2"> Second Name</label>
                    <input type="text" id="name" name="second-name" placeholder="<?php echo "$secondName" ?>"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>

                <div class="mb-4">
                    <label for="age" class="block text-gray-700 font-medium mb-2">Date of Birth</label>
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 left-2 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker type="text" datepicker-format="yyyy-mm-dd"
                            class="bg-gray-50  border-gray-300 text-gray-900 w-auto text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-11 p-2.5"
                            placeholder="<?php echo "$dob" ?>" name="dob">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="<?php echo "$email" ?>"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="mobile" class="block text-gray-700 font-medium mb-2"> Mobile No.</label>
                    <input type="tel" id="phone" name="phone" placeholder="<?php echo "$phone" ?>" maxlength="10" ;
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-medium mb-2">Permanent Address</label>
                    <input type="text" id="text" name="address" placeholder="<?php echo "$address" ?>"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                    <input type="hidden" name="id" value="<?php echo "$uid" ?>">
                    <input type="hidden" name="info" value="<?php echo trim($role); ?>">
                </div>
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <input type="submit" name="submit"
                        class="bg-blue-500 text-center text-white px-4 py-2 rounded-lg hover:bg-blue-600"
                        value="update">
                </div>

            </form>
        </div>
    </div>
    <!-- Completion of Update Section -->
</body>

<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="index.php" class="flex items-center mb-4 sm:mb-0">
                <img src="../images/main_logo.webp" class="h-14 mr-3" alt="Flowbite Logo" />
            </a>
            <ul class="flex flex-wrap items-center text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="index.php"
                class="hover:underline">ISCKON Chitwan &trade;</a>. All Rights Reserved.</span>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>

</html>