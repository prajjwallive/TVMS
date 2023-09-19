<?php
session_start();
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
    include("./nav.php")
        ?>
    <!-- Registration Form -->
    <div class="bg-white border width-auto rounded-lg px-8 py-6 mx-auto my-8 max-w-2xl">
        <h2 class="text-2xl font-medium mb-4 text-center">Are You New User? Sign Up</h2>
        <form method="post" action="Security/regis_valid.php">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2"> First Name</label>
                <input type="text" id="name" name="first-name"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                    required>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2"> Second Name</label>
                <input type="text" id="name" name="second-name"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                    required>
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
                        placeholder="Select date" name="dob">
                </div>
            </div>
            <div class="mb-4">
                <label for="Nearest_Center" class="block text-gray-700 font-medium mb-2">ISKCON Center</label>
                <select id="center" name="center"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                    required>
                    <option value="">Select Center</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Chitwan">Chitwan</option>
                    <option value="Dharan">Dharan</option>
                    <option value="Nawalpur">Nawalpur</option>
                    <option value="Tilotamma">Tilotamma</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Dang">Dan</option>
                    <option value="Nepalgunj">Nepalgunj</option>
                    <option value="Butwal">Butwal</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-gray-700 font-medium mb-2"> Select Gender</label>
                <div class="flex flex-wrap -mx-2">
                    <div class="px-2 w-1/3">
                        <label for="Male" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="Male" name="gender" value="Male" class="mr-2">Male
                        </label>
                    </div>
                    <div class="px-2 w-1/3">
                        <label for="Female" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="Female" name="gender" value="Female" class="mr-2">Female
                        </label>
                    </div>
                    <div class="px-2 w-1/3">
                        <label for="Others" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="Others" name="gender" value="Others" class="mr-2">Others
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Example@gmail.com"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                    required>
            </div>
            <div class="mb-4">
                <label for="mobile" class="block text-gray-700 font-medium mb-2"> Mobile No.</label>
                <input type="tel" id="phone" name="phone" placeholder="xxxx-xxx-xxx" maxlength="10" ;
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                    required>
            </div>
            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-medium mb-2">Permanent Address</label>
                <input type="text" id="text" name="address" placeholder="Ratnanagar-2, Chitwan"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium mb-2">New Password</label>
                <input type="password" id="new_password" name="first-password" placeholder="************"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                    required>
            </div>
            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-medium mb-2">Repeat Password</label>
                <input type="password" id="repeat_password" name="second-password" placeholder="***********"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                    required>
            </div>
            <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                <input type="submit" name="submit"
                    class="bg-blue-500 text-center text-white px-4 py-2 rounded-lg hover:bg-blue-600" value="Sign Up">
            </div>

        </form>
    </div>
    <!-- Completion of Registration -->


    <?php include("./footer.php") ?>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>

</html>