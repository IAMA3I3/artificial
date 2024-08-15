<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles.css?v=<?php echo time(); ?>">
    <title>Init</title>
</head>

<body>
    <div class=" w-full bg-slate-600 text-white shadow">
        <div class=" container flex flex-col md:flex-row md:justify-between">
            <div class=" flex text-2xl items-center justify-between py-2 md:text-3xl md:py-0">
                <a href="index.php">Brand</a>
                <div class=" cursor-pointer md:hidden" id="nav-toggle">
                    &#9776;
                </div>
            </div>
            <div class=" flex flex-col md:flex-row overflow-hidden *:my-1 md:*:my-0 *:py-2 md:*:py-3 md:*:px-8 *:px-3 *:rounded-md md:*:rounded-none hover:*:bg-white hover:*:text-gray-800" id="nav">
                <a class="<?php echo isPageActive('index.php') ? ' bg-white text-gray-800' : ''; ?>" href="index.php">Home</a>
                <a class="<?php echo isPageActive('about.php') ? ' bg-white text-gray-800' : ''; ?>" href="about.php">About</a>
            </div>
        </div>
    </div>