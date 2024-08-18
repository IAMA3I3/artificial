<!-- footer -->
<div class=" mt-8 py-8 bg-slate-500 dark:bg-slate-900 text-white">
    <div class=" container">

        <div class=" flex flex-wrap gap-8 justify-between">

            <div class=" w-[300px]">
                <a href="index.php" class=" inline-block">
                    <img src="assets/logo_brand_w.webp" class=" h-[25px]" alt="">
                </a>
                <div class=" mt-4 text-sm">
                    Discover, experience, and collect exceptional art at Artificial. Explore our curated collections and connect with your passion for creativity.
                </div>
                <div class=" mt-4 flex items-center gap-4 text-2xl hover:*:text-app-primary">
                    <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a>
                </div>
            </div>

            <div class=" w-[200px]">
                <div class=" font-bold mb-4">Menu</div>
                <div class=" flex flex-col items-start gap-4 font-semibold text-sm hover:*:text-app-primary">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="exhibition.php">Exhibition</a>
                </div>
            </div>

            <div class=" w-[200px]">
                <div class=" font-bold mb-4">Quick Links</div>
                <div class=" flex flex-col items-start gap-4 font-semibold text-sm hover:*:text-app-primary">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Condition</a>
                    <a href="#">FAQ's</a>
                </div>
            </div>

            <div class=" w-[300px]">
                <div class=" font-bold mb-4">Subscribe</div>
                <div class=" text-sm">Be the first to know when there's a new art in town</div>
                <form action="" method="post">
                    <div class=" mt-4">
                        <input type="email" name="email" id="subscribe-email" class=" w-full" placeholder="Enter your email address">
                        <button type="submit" class=" mt-2 app-btn w-full">SUBSCRIBE</button>
                    </div>
                </form>
            </div>

        </div>

        <div class=" w-full h-[1px] bg-slate-900 dark:bg-slate-500 my-4"></div>

        <div class=" flex flex-col sm:flex-row text-center items-center justify-between">
            <div class=" flex items-center gap-2 justify-center">
                <span>&#64;</span>
                <img src="assets/logo_w.webp" class=" h-[16px]" alt="">
                <span>&#169; <?php echo date('Y'); ?></span>
            </div>
            <div class=" mt-4 sm:mt-0 flex items-center gap-2 justify-center">
                <span>Developed by:</span>
                <a href="https://abdulazeezsalamiportfolio.onrender.com/" target="_blank" class=" hover:underline">Aziz</a>
            </div>
        </div>

    </div>
</div>
<!-- end footer -->

<!-- display image -->
<div id="img-display" class=" pop transition-all duration-500 overflow-hidden fixed top-0 left-0 z-[10000] w-screen h-screen bg-black/80 flex justify-center items-center">
    <div class=" main transition-all duration-500 h-screen md:h-[80vh] w-full md:w-[80vw]">
        <img src="./assets/preloader.gif" alt="..." class=" w-full h-full object-contain">
    </div>
    <div id="left" class=" absolute left-4 sm:left-8 top-[50%] translate-y-[-50%] px-2 py-4 text-2xl md:text-4xl text-gray-400 hover:text-white bg-black/20 cursor-pointer"><i class="fa-solid fa-chevron-left"></i></div>
    <div id="right" class=" absolute right-4 sm:right-8 top-[50%] translate-y-[-50%] px-2 py-4 text-2xl md:text-4xl text-gray-400 hover:text-white bg-black/20 cursor-pointer"><i class="fa-solid fa-chevron-right"></i></div>
    <div class=" absolute top-8 right-4 sm:right-8 rounded-full border border-white w-[50px] h-[50px] flex justify-center items-center text-white hover:bg-app-primary hover:rotate-90 transition cursor-pointer text-2xl">
        <i class="fa-solid fa-xmark"></i>
    </div>
</div>
<!-- end display image -->

<!-- scroll up btn -->
<div id="scrollup-btn" class=" z-[1000] fixed bottom-16 right-4 h-[50px] aspect-square active:scale-75 transition-all duration-500 rounded-lg bg-black/20 backdrop-blur-sm text-gray-400 hover:bg-app-primary hover:text-white flex justify-center items-center text-2xl cursor-pointer">
    <i class="fa-solid fa-arrow-up"></i>
</div>
<!-- end scroll up btn -->

</main>

<!-- icon -->
<script src="https://kit.fontawesome.com/ecdfbd10f7.js" crossorigin="anonymous"></script>
<!-- pop up image -->
<script src="src/pop_img.js"></script>
<!-- script -->
<script src="src/script.js"></script>
<!-- window event -->
<script src="src/window_event.js"></script>
</body>

</html>