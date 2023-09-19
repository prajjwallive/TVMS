<?php
include("../Security/session_validation.php"); 
?>
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
    include("../admin/admin_imports.php");
    include("./header.php");
    include("./sidebar.php");
    ?>
    <!-- Registration Form -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dotted rounded-lg dark:border-gray-700 mt-14">
            <h2 class="text-2xl font-medium mb-4 text-center">Today's Visitor Entry</h2>
            <form method="post" action="../Security/attendence.php">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2"> Male</label>
                    <input type="number" id="name" name="Male"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                        required>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2"> Female</label>
                    <input type="number" id="name" name="Female"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                        required>
                </div>
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <input type="submit" name="submit"
                        class="bg-blue-500 text-center text-white px-4 py-2 rounded-lg hover:bg-blue-600"
                        value="Make Entry">
                </div>
            </form>
        </div>
        <div class="p-4 border-2 border-gray-200 border-dotted rounded-lg dark:border-gray-700 mt-14">
            <h2 class="text-2xl font-medium mb-4 text-center">Visit Me If Today is Special Day!</h2>
            <form method="post" action="../Security/event_entry.php">
                <div class="mb-4">
                    <label for="Event" class="block text-gray-700 font-medium mb-2">Event</label>
                    <select id="event" name="event"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                        <option value="Saturday Feast">Saturday Feast</option>
                        <option value="Janmastami">Janmastami</option>
                        <option value="RadhaAstami">RadhaAstami</option>
                        <option value="RathYatra">RathYatra</option>
                        <option value="Gaurpurnima">Gaurpurnima</option>
                        <option value="Narshima Chaturthi ">Narshima Chaturthi</option>
                        <option value="Mayapur Yatra">Mayapur Yatra</option>
                        <option value="Vrindavan Yatra">Vrindavan Yatra</option>
                    </select>
                </div>
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <input type="submit" name="submit"
                        class="bg-red-500 text-center text-white px-4 py-2 rounded-lg hover:bg-blue-600"
                        value="AddEvent">
                </div>
            </form>
        </div>
    </div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>

</html>