<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title> ISCKON Chitwan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

</head>

<body class="overflow-x-hidden antialiased">
    <!--  Header section of landing page -->
    <?php
    include("./nav.php")
        ?>

    <!-- End of header section of landing page -->

    <!-- Heros section of homepage -->
    <div class="px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-5">
        <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
            <div class="flex flex-col justify-center">
                <div class="max-w-xl mb-6">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        Welcome to ISCKON Chitwan<br class="hidden md:block" />
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg text-justify">
                        ISKCON is a branch of the International Society for Krishna Consciousness (ISKCON) in Nepal. We
                        are located in Gorkhali tole, Baseni, Chitwan. We are trying to serve the mission of Srila
                        Prabhupada by preaching the philosophy of Krishna Consciousness and aim to propagate the message
                        of Godhead in every nook and corner of Chitwan.
                    </p>
                </div>
                <div class="grid gap-5 row-gap-8 sm:grid-cols-2">
                    <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                        <div class="h-full p-5 border border-l-0 rounded-r">
                            <h6 class="mb-2 font-semibold leading-5">
                                I'll be sure to note that in my log
                            </h6>
                            <p class="text-sm text-gray-900">
                                Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave
                                down.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                        <div class="h-full p-5 border border-l-0 rounded-r">
                            <h6 class="mb-2 font-semibold leading-5">
                                A business big enough that it could be listed
                            </h6>
                            <p class="text-sm text-gray-900">
                                Those options are already baked in with this model shoot me an email clear.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96"
                    src="./images/cover.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="" />
            </div>
        </div>
    </div>
    <!-- Double Section -->
    <section class="double xl:max-2xl:m-20 sm:max-md:flex lg:flex">
        <!-- Prabhupada dedicatated Segment -->
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">
                <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
                    src="./images/HG.png">
                <div class="text-center lg:w-2/3 w-2/3">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Srila Prabhupada<br>
                        <span class="text-xl italic "> Founder Acharaya</span>
                    </h1>
                    <div class="flex justify-center">
                        <button
                            class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg"><a
                                href="https://www.youtube.com/watch?v=s9jh47Vz0RU">Watch Now</a></button>
                        <button
                            class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Learn
                            More.</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Completion of Prabhupada Section -->

        <div id="default-carousel" class="relative w-full mr-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-auto overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./images/YouthFestival/img1.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./images/YouthFestival/img2.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./images/YouthFestival/img3.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./images/YouthFestival/imag4.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./images/YouthFestival/img5.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 6 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="./images/YouthFestival/img6.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 6"
                    data-carousel-slide-to="5"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only text-black-700">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only text-black-700">Next</span>
                </span>
            </button>
        </div>

    </section>


    <!-- Blog Link Section -->
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <div
                class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                <a href="#"
                    class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path
                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                        </path>
                    </svg>
                    FAQ's
                </a>
                <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">What to people do in
                    ISKCON?</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">ISKCON Society is being hotspot for
                    the spritual education seeker.</p>
                <a href="#"
                    class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div
                    class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#"
                        class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        New
                    </a>
                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">History of ISKCON Society?
                    </h2>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Static websites are now used to
                        bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                        both web designers and developers.</p>
                    <a href="#"
                        class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read
                        more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                <div
                    class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#"
                        class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z">
                            </path>
                        </svg>
                        Code
                    </a>
                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Best react libraries around
                        the web</h2>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Static websites are now used to
                        bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                        both web designers and developers.</p>
                    <a href="#"
                        class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read
                        more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Completion of Blog Link Section -->

    <!-- Books -->
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white text-center justify-center">Life Changing Books
    </h1>

    <?php
    include('./Security/Connection.php');

    $sql = "SELECT * FROM books";

    $result = $conn->query($sql);

    $image_Path = array();
    $image_name = array();
    $image_Price = array();
    $image_Language = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $image_Path[] = $row['Image'];
            $image_name[] = $row['Name'];
            $image_Price[] = $row['Price'];
            $image_Language[] = $row['Language'];
        }
    }

    $conn->close();
    ?>
    <!-- Books Section -->


    <div class="buyboooks  xl:max-2xl:m-20 sm:max-md:flex lg:flex justify-between">
        <?php

        for ($j = 0; $j < 4; $j++) {
            ?>
            <div
                class=" m-5 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="p-8 rounded-t-lg" src="./images/Books/<?php echo $image_Path[$j] ?>" height="100" width="400"
                    alt="product image" />
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Name:
                            <?php echo $image_name[$j] ?>
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Language:
                            <?php echo $image_Language[$j] ?>
                        </h5>
                    </a>

                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">Price(Nrs):
                            <?php echo $image_Price[$j] ?>
                        </span>
                        <div class="flex items-center justify-between">
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <!-- Footer -->
    <?php
    include("./footer.php")
        ?>

</body>

</html>