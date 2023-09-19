<?php
include("../Security/session_validation.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title> ISCKON Chitwan</title>
    <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <script src="https://unpkg.com/tailwindcss-jit-cdn">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <!-- flow bite script for apex charts -->
</head>

<body>
    <!-- Dashboard View Including Navbar and Side bar -->

    <?php include("header.php") ?>
    <?php include("sidebar.php") ?>
    <?php include("../Scripts/ViewerReport.php") ?>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dotted rounded-lg dark:border-gray-700 mt-4">
            <!-- Visitors Info -->
            <div class="lg:flex">
                <!-- Laptop/PC View (2x2 Grid) -->
                <div class="lg:w-1/2 lg:flex lg:flex-col">
                    <div class="lg:w-full lg:h-1/2 p-4"><canvas id="myChart"
                            class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas></div>
                    <div class="lg:w-full lg:h-1/2 p-4"><canvas id="myChart1"
                            class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas></div>
                </div>
                <div class="lg:w-1/2 lg:flex lg:flex-col">
                    <div class="lg:w-full lg:h-1/2 p-4"><canvas id="myChart2"
                            class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas></div>
                    <div class="lg:w-full lg:h-1/2  p-4"><canvas id="myChart3"
                            class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas></div>
                </div>

                <!-- Tablet View (Single Column) -->
                <div class="hidden lg:block lg:w-0"></div>
                <div class="w-full lg:hidden p-4"><canvas id="myChart"
                        class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas></div>
                <div class="w-full lg:hidden  p-4"><canvas id="myChart"
                        class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas></div>
                <div class="w-full lg:hidden  p-4"><canvas id="myChart"
                        class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas></div>
                <div class="w-full lg:hidden  p-4"><canvas id="myChart"
                        class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas></div>
            </div>


            <!-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 xl:grid-cols-2 gap-4 mt-5">
                <canvas id="myChart" class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas>
                <canvas id="myChart1" class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas>
                <canvas id="myChart2" class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas>
                <canvas id="myChart3" class="w-full h-48 md:w-96 md:h-64 xl:h-48"></canvas>
            </div> -->
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
</body>

</html>