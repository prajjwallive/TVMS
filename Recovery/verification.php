<?php
$token = $_GET['token'];


$token_hash = hash("sha256", $token);
include "../Security/Connection.php";

$sql = "SELECT * FROM creds
WHERE reset_token_hash = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $token_hash);

$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user === null) {
    die("token not found");
}

if (strtotime($user['reset_token_expires_at']) <= time()) {
    die("token has expired");
}
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title> ISCKON Chitwan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>

<body class="overflow-x-hidden antialiased">

    <!--Login Form-->
    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center mx-auto md:h-screen lg:py-0">
            <a href="home.php" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="../images/iskcon_logo.jpg" alt="logo">
                ISKCON SOCIETY
            </a>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0  ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Enter New password
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="reset_confirm.php" method="POST">
                        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                        <!-- Checking for any kind of -->
                        <?php if (isset($GET['error'])) {
                            ?>
                            <p class="error">
                                <?php echo $_GET['error']; ?>
                            </p>
                        <?php } ?>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter
                                Password</label>
                            <input type="password" name="first-password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Repeat Password</label>
                            <input type="password" name="second-password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <input type="submit" value="Sign In" name="Submit"
                            class="w-full text-gray-900 bg-green-300 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  ">
                        <p class="text-sm font-light">
                            Don’t have an account yet? <a href="../registration.php"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Completion of Reset Form -->
    <!-- Starting of footer section -->
</body>

</html>