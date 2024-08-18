<?php

include './includes/functions.php';
include './components/header.php';
?>

<!-- showcase -->
<div class=" w-full md:h-[80vh] bg-black bg-cover bg-center bg-none bg-fixed" style="background-image: url(./assets/showcase_bg.webp);">
    <div class=" w-full h-full bg-black/80 dark:bg-black/90 text-white py-[80px] md:py-0">
        <div class=" container h-full w-full pt-10 md:pt-20">
            <div class=" h-full w-full flex flex-col md:flex-row items-center justify-around gap-8">
                <div class=" w-full max-w-[300px] aspect-[5/6] rounded-lg overflow-hidden shadow-lg">
                    <img src="./assets/showcase.webp" class=" h-full w-full object-cover" alt="">
                </div>
                <div class=" w-full max-w-[600px] text-center md:text-left">
                    <div class=" text-2xl md:text-4xl text-app-primary tracking-wide">Unveiling Masterpieces</div>
                    <div class=" font-semibold text-base md:text-lg italic text-gray-300">Your Journey Through Art Begins Here</div>
                    <div class=" text-lg md:text-xl mt-2">
                        Step into a world where art speaks louder than words. Explore our gallary's captivating collection that celebrates creativity and inspires imagination. Welcome to a realm where every brushstroke tells a story.
                    </div>
                    <div class=" mt-4 flex flex-col md:flex-row items-center gap-4">
                        <a href="./contact.php" class=" app-btn-primary w-[200px]"><span>Contact Us</span><span><i class="fa-solid fa-square-arrow-up-right"></i></span></a>
                        <button id="gallery-btn" class=" app-btn-secondary w-[200px]"><span>Gallery</span><span class=" animate-bounce animate-infinite"><i class="fa-solid fa-angles-down"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end showcase -->

<!-- gallery -->
<div id="gallery" class=" py-8">
    <div class=" container">

        <!-- categories -->
        <div class=" pb-2 w-full overflow-x-auto scrollbar">
            <div class=" flex flex-nowrap text-nowrap items-center gap-4 text-sm font-semibold *:rounded-full">
                <button class=" bg-app-primary text-white app-btn-secondary">All</button>
                <button class=" app-btn-secondary">Charcoal Art</button>
                <button class=" app-btn-secondary">Pen Art</button>
                <button class=" app-btn-secondary">Acrylic Art</button>
                <button class=" app-btn-secondary">Oil Paint Art</button>
            </div>
        </div>
        <!-- end categories -->

        <!-- gallery list -->
        <!-- <div class=" mt-4 text-3xl font-semibold text-gray-400">Nothing Here Yet</div> -->
        <div class=" mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- gallery item -->
            <div id="all-gallery-item" class=" relative group w-full aspect-square overflow-hidden rounded-xl shadow-md">
                <img src="./assets/temp/art.webp" class=" w-full h-full object-cover group-hover:scale-110 transition-all duration-500" alt="">
                <div class=" absolute top-0 left-0 w-full h-full flex justify-center items-center">
                    <div id="view" class=" invisible opacity-0 w-0 group-hover:visible group-hover:opacity-100 group-hover:w-[60px] transition-all duration-500 aspect-square rounded-full border-white border-2 bg-black/20 text-white flex justify-center items-center text-lg cursor-pointer hover:text-app-primary hover:border-app-primary">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </div>
                <a href="#" class=" absolute cursor-pointer bottom-4 right-4 h-[40px] aspect-square rounded-full bg-black/70 border-app-primary text-white hover:bg-app-primary flex justify-center items-center">
                    <i class="fa-solid fa-info"></i>
                </a>
            </div>
            <!--  -->
            <div id="all-gallery-item" class=" relative group w-full aspect-square overflow-hidden rounded-xl shadow-md">
                <img src="./assets/showcase.webp" class=" w-full h-full object-cover group-hover:scale-110 transition-all duration-500" alt="">
                <div class=" absolute top-0 left-0 w-full h-full flex justify-center items-center">
                    <div id="view" class=" invisible opacity-0 w-0 group-hover:visible group-hover:opacity-100 group-hover:w-[60px] transition-all duration-500 aspect-square rounded-full border-white border-2 bg-black/20 text-white flex justify-center items-center text-lg cursor-pointer hover:text-app-primary hover:border-app-primary">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </div>
                <a href="#" class=" absolute cursor-pointer bottom-4 right-4 h-[40px] aspect-square rounded-full bg-black/70 border-app-primary text-white hover:bg-app-primary flex justify-center items-center">
                    <i class="fa-solid fa-info"></i>
                </a>
            </div>
            <!--  -->
            <div id="all-gallery-item" class=" relative group w-full aspect-square overflow-hidden rounded-xl shadow-md">
                <img src="./assets/showcase_bg.webp" class=" w-full h-full object-cover group-hover:scale-110 transition-all duration-500" alt="">
                <div class=" absolute top-0 left-0 w-full h-full flex justify-center items-center">
                    <div id="view" class=" invisible opacity-0 w-0 group-hover:visible group-hover:opacity-100 group-hover:w-[60px] transition-all duration-500 aspect-square rounded-full border-white border-2 bg-black/20 text-white flex justify-center items-center text-lg cursor-pointer hover:text-app-primary hover:border-app-primary">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </div>
                <a href="#" class=" absolute cursor-pointer bottom-4 right-4 h-[40px] aspect-square rounded-full bg-black/70 border-app-primary text-white hover:bg-app-primary flex justify-center items-center">
                    <i class="fa-solid fa-info"></i>
                </a>
            </div>
            <!-- end gallery item -->
        </div>
        <!-- end gallery list -->

        <!-- pagination -->
        <div class=" mt-4 flex items-center justify-between flex-nowrap gap-4">
            <button class=" h-[40px] aspect-square rounded-lg bg-black/40 text-white hover:bg-app-primary flex justify-center items-center active:scale-90">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <div class=" text-sm font-semibold text-center">Showing 1 to 6 of 24</div>
            <button class=" h-[40px] aspect-square rounded-lg bg-black/40 text-white hover:bg-app-primary flex justify-center items-center active:scale-90">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <!-- end pagination -->

    </div>
</div>
<!-- end gallery -->

<?php include './components/footer.php'; ?>