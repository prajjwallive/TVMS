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
    <!--  Header section of landing page -->
    <?php
    include("./nav.php")
        ?>
    <!-- End of header section -->

    <!-- Contact US Section -->
    <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
                scrolling="no"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.5747207686586!2d84.4494140760716!3d27.69953622583473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994e5f18631cb77%3A0x78305ee1065734b2!2sIskcon%20Chitawan!5e0!3m2!1sen!2snp!4v1688090681293!5m2!1sen!2snp"
                style="filter:  contrast(1.2) opacity(1);"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <form
                class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-3/4 mt-10 md:mt-0 relative z-1 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Feel free to give us and Feedback or Queries.</p>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Submit</button>
                <p class="text-xs text-gray-500 mt-3">ISKCON Chitwan Official Website</p>
            </form>
        </div>
    </section>

    <!-- Starting of footer section -->
    <?php
    include("./footer.php")
        ?>
</body>

</html>