<!DOCTYPE html>
<html lang="en">
<?php
include("../Security/session_validation.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title> ISCKON Chitwan</title>
    <?php
    include('admin_imports.php');
    ?>

</head>

<body>
    <!-- Dashboard View Including Navbar and Side bar -->

    <?php include("header.php") ?>
    <?php include("sidebar.php") ?>
    <div class="p-4 sm:ml-64">
        <!-- Headings -->
        <div class="p-4 border-2 border-gray-200 border-dotted rounded-lg dark:border-gray-700 mt-14">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Update your book information.</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Be Careful
                for your changes once you make your change this will be visible to all the users.</p>
            <a href="../Security/logout.php"
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                See update at home page!
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
            <!-- Book Update Form -->
            <form method="post" action="../Security/book_update.php" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2"> Book Name</label>
                    <input type="text" id="book-name" name="Book-name"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2"> Price in NRs.</label>
                    <input type="text" id="Book-price" name="Book-price"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="Nearest_Center" class="block text-gray-700 font-medium mb-2">Book Language</label>
                    <select id="Book_Language" name="Book_Language"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                        <option value="Nepali">Nepali</option>
                        <option value="Hindi">Hindi</option>
                        <option value="English">English</option>
                        <option value="Russian">Russian</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Dutch">Dutch</option>
                        <option value="German">German</option>
                        <option value="French">French</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="type" class="block text-gray-700 font-medium mb-2"> Select Type</label>
                    <div class="flex flex-wrap -mx-2">
                        <div class="px-2 w-1/3">
                            <label for="Small" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="Small" name="type" value="Small" class="mr-2">Small
                            </label>
                        </div>
                        <div class="px-2 w-1/3">
                            <label for="Medium" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="Small" name="type" value="Medium" class="mr-2">Medium
                            </label>
                        </div>
                        <div class="px-2 w-1/3">
                            <label for="Large" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="Large" name="type" value="Large" class="mr-2">Large
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="Book-Id" class="block text-gray-700 font-medium mb-2"> Book-ID</label>
                    <input type="text" id="Book-Id" name="Book-Id" maxlength="10" ;
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                        required>
                </div>

                <!-- Book Image Upload -->
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                        </div>
                        <input type="file" name="image" accept="image/*"
                            lass="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                    </label>
                </div>

                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <input type="submit" name="submit"
                        class="bg-blue-500 text-center text-white px-4 py-2 rounded-lg hover:bg-blue-600"
                        value="Save Update">
                </div>

            </form>
        </div>
    </div>
</body>

</html>