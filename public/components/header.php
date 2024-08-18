<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="assets/icon.webp" type="image/x-icon">
    <title>artificial</title>
</head>

<body>
    <main>

        <!-- preloader -->
        <div id="preloader" class=" transition-all duration-500 fixed top-0 left-0 w-full h-full bg-black z-[100000] flex justify-center items-center">
            <div class=" z-10 h-[160px] aspect-square">
                <img src="assets/preloader.gif" class=" w-full h-full object-contain" alt="">
            </div>
        </div>
        <!-- end preloader -->

        <!-- top nav -->
        <div id="top-nav" class=" z-50 transition-all duration-500 w-full fixed top-0">
            <div class=" container">
                <div class=" flex items-center justify-between">
                    <a href="index.php" class=" relative">
                        <img id="brand-logo_w" src="assets/logo_brand_w.webp" class=" transition-all duration-500 h-[20px] md:h-[25px]" alt="">
                        <img id="brand-logo_b" src="assets/logo.webp" class=" absolute top-0 transition-all duration-500 h-[20px] md:h-[25px]" alt="">
                    </a>
                    <div class=" flex items-center gap-8">
                        <!-- navs -->
                        <div class=" hidden md:flex items-center gap-8 *:py-5 text-sm *:cursor-pointer font-semibold *:border-b-4">
                            <a href="index.php" class="<?php echo (isPageActive('index.php')) ? 'border-app-primary' : 'border-transparent hover:border-app-primary'; ?>">Home</a>
                            <a href="about.php" class="<?php echo (isPageActive('about.php')) ? 'border-app-primary' : 'border-transparent hover:border-app-primary'; ?>">About</a>
                            <a href="contact.php" class="<?php echo (isPageActive('contact.php')) ? 'border-app-primary' : 'border-transparent hover:border-app-primary'; ?>">Contact</a>
                            <a href="exhibition.php" class="<?php echo (isPageActive('exhibition.php')) ? 'border-app-primary' : 'border-transparent hover:border-app-primary'; ?>">Exhibition</a>
                        </div>
                        <!-- end navs -->
                        <!-- mode btn -->
                        <div id="mode-btn" class=" relative h-[23px] w-[43px] bg-gray-400 rounded-full group cursor-pointer border-[2px] border-gray-600 dark:border-gray-300">
                            <div class=" w-full h-full px-[4px] flex items-center justify-between text-xs text-white">
                                <i class="fa-solid fa-moon"></i>
                                <i class="fa-solid fa-sun"></i>
                            </div>
                            <div class=" transition-all duration-500 absolute top-0 bottom-0 left-[0%] dark:left-[50%] h-[20px] aspect-square rounded-full bg-gray-800"></div>
                        </div>
                        <!-- menu btn -->
                        <div id="menu-ic" class=" *:transition md:*:hidden *:duration-500">
                            <div class=""></div>
                            <div class=""></div>
                            <div class=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top nav -->


        <!-- overlay -->
        <div id="menu-overlay" class=" pop transition-all duration-500 fixed top-0 bottom-0 left-0 z-[10000] w-full h-full bg-black/20"></div>
        <!-- end overlay -->

        <!-- side nav -->
        <div id="menu" class=" from-left transition-all duration-500 md:hidden fixed left-0 top-0 h-screen z-[10000] w-[90%] max-w-[250px] shadow bg-black/90 backdrop-blur-sm text-white overflow-y-auto overflow-x-hidden scrollbar">
            <div id="close-menu-btn" class=" absolute top-4 right-4 w-[40px] aspect-square rounded-full border-2 border-white text-white hover:bg-app-primary hover:rotate-180 transition duration-500 flex justify-center items-center cursor-pointer">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class=" mt-20">
                <div class=" flex flex-col text-sm font-semibold gap-2 *:py-2 *:px-8 *:border-r-4 *:cursor-pointer">
                    <a href="index.php" class="<?php echo (isPageActive('index.php')) ? 'border-app-primary bg-app-primary/20' : 'hover:bg-app-primary/20 border-transparent'; ?>">Home</a>
                    <a href="about.php" class="<?php echo (isPageActive('about.php')) ? 'border-app-primary bg-app-primary/20' : 'hover:bg-app-primary/20 border-transparent'; ?>">About</a>
                    <a href="contact.php" class="<?php echo (isPageActive('contact.php')) ? 'border-app-primary bg-app-primary/20' : 'hover:bg-app-primary/20 border-transparent'; ?>">Contact</a>
                    <a href="exhibition.php" class="<?php echo (isPageActive('exhibition.php')) ? 'border-app-primary bg-app-primary/20' : 'hover:bg-app-primary/20 border-transparent'; ?>">Exhibition</a>
                </div>
            </div>
        </div>
        <!-- end side nav -->