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

<?php
include '../Security/Connection.php';
$search_query = '';

if (isset($_POST['search_button'])) {
    // Get the search query from the form
    $search_query = trim($_POST['search_query']);

    // If the search query is empty, set it to a wildcard to retrieve all data
    if (empty($search_query)) {
        $search_query = '%'; // Wildcard matches everything
    }

    // Modify the SQL query to include the search condition
    $sql = "SELECT * FROM creds 
            NATURAL JOIN users
            NATURAL JOIN contact 
            WHERE FName LIKE '%$search_query%' OR SName LIKE '%$search_query%'";
} else {
    // Default SQL query to retrieve all data
    $sql = "SELECT * FROM creds 
            NATURAL JOIN users
            NATURAL JOIN contact";
}

$result = $conn->query($sql);
$data = [];

// Array to hold the data;
// Loop to read data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

?>

<body>
    <!-- Dashboard View Including Navbar and Side bar -->

    <?php include("header.php") ?>
    <?php include("sidebar.php") ?>

    <!-- Start block -->

    <!-- Searching Filter Section -->
    <div class="p-4 sm:ml-64">
        <form method="POST" class="sm:max-md:mt-auto mt-11 z-1">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" name="search_query"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Users">
                <button type="submit" name="search_button"
                    class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        <!-- Crud Operation Section -->

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-scroll">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3 hidden  md:block lg:block">
                            Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gender
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $row['FName'] ?>
                                <?= $row['SName'] ?>
                            </th>
                            <td class="px-6 py-4 items-center">
                                <?= $row['Role'] ?>
                            </td>
                            <td class="px-6 py-4 hidden  md:block lg:block">
                                <?= $row['Address'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $row['Gender'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <form action="profile_edit.php" method="POST">
                                    <input type="hidden" name="info" value="<?= $row['Uid'] ?>">
                                    <button type="submit" class="bg-red-500  text-white font-bold py-2 px-4 rounded">
                                        Edit
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->


</body>

</html>