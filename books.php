<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>ISCKON Chitwan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <script type="text/javascript" src="book_drop.js"></script>
</head>

<body class="overflow-x-hidden antialiased">
    <!--  Header section of landing page -->
    <?php
    include("./nav.php")
        ?>
    <!-- End of header section of landing page -->

    <!-- Search Bar and Filter by Category -->

    <form method="POST" class="ml-10 mr-10">
        <div class="flex">
            <select name="category" id="categoryDropdown"
                class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                <option value="All">All categories</option>
                <option value="Small">Small Categories</option>
                <option value="Medium">Medium Categories</option>
                <option value="Large">Big Categories</option>
                <option value="Others">Others</option>
            </select>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" name="search_query"
                    class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                    placeholder="Search Books.">
                <button type="submit" name="search_button"
                    class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>

    <!-- Database connection building -->
    <?php
    include('./Security/Connection.php');

    // Initialize an empty search query
    $search_query = '';

    // Initialize a category filter
    $category_filter = '';

    if (isset($_POST['search_button'])) {
        // Get the search query from the form
        $search_query = trim($_POST['search_query']);

        // Get the selected category
        $category_filter = $_POST['category'];

        // If the search query is empty, set it to a wildcard to retrieve all data
        if (empty($search_query)) {
            $search_query = '%'; // Wildcard matches everything
        }

        // Modify the SQL query to include the search condition and category filter
        if ($category_filter == 'All') {
            $sql = "SELECT * FROM books WHERE Name LIKE '%$search_query%'";
        } else {
            $sql = "SELECT * FROM books WHERE Name LIKE '%$search_query%' AND `Type` = '$category_filter'";
        }
    } else {
        // Default SQL query to retrieve all data
        $sql = "SELECT * FROM books";
    }

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
    <?php
    $k = 0;
    $totalBooks = count($image_Path); // Total number of books obtained from the database
    $booksPerRow = 4; // Number of books to display per row
    
    for ($i = 0; $i < ceil($totalBooks / $booksPerRow); $i++) {
        ?>
        <div class="buyboooks xl:max-2xl:m-20 sm:max-md:flex lg:flex justify-between">
            <?php
            for ($j = 0; $j < $booksPerRow; $j++) {
                $bookIndex = $i * $booksPerRow + $j;
                if ($bookIndex < $totalBooks) {
                    ?>
                    <div
                        class="m-5 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="p-8 rounded-t-lg" src="./images/Books/<?php echo $image_Path[$bookIndex] ?>" height="100"
                            width="400" alt="product image" />
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Name:
                                    <?php echo $image_name[$bookIndex] ?>
                                </h5>
                            </a>
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Language:
                                    <?php echo $image_Language[$bookIndex] ?>
                                </h5>
                            </a>
                            <span class="text-xl font-bold text-gray-900 dark:text-white">Price(Nrs):
                                <?php echo $image_Price[$bookIndex] ?>
                            </span>
                            <div class="flex items-center justify-between">
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
            }
            ?>
        </div>
        <?php
    }
    ?>
    <!-- Book Section completed -->
    <!-- Book Section completed -->

    <!-- Footer Section -->
    <?php
    include("./footer.php")
        ?>
</body>

</html>