<?php error_reporting(0);
$page = $_GET['page']; ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <!-- common meta tags -->

    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="google-site-verification" content="Kelvin Maingi Makau, Ui/Ux Design, App Development, SEO, Web Development, Digital Flipbooks Design and Hosting, Brand Marketing & Gamification" />

    <meta name="msvalidate.01" content="Kelvin Maingi Makau, Ui/Ux Design, App Development, SEO, Web Development, Digital Flipbooks Design and Hosting, Brand Marketing & Gamification" />

    <meta name="y_key" content="Kelvin Maingi Makau. Ui/Ux Design, App Development, SEO, Web Development, Digital Flipbooks Design and Hosting, Brand Marketing & Gamification" />

    <meta name="description" content="Kelvin Maingi Makau, Ui/Ux Design, App Development, SEO, Web Development, Digital Flipbooks Design and Hosting, Brand Marketing & Gamification">

    <meta name="keywords" content="Kelvin Maingi Makau, Ui/Ux Design, App Development, SEO, Web Development, Digital Flipbooks Design and Hosting, Brand Marketing & Gamification">

    <meta name="author" content="Kelvin Maingi Makau, software developer">

    <link rel="shortcut icon" href="images/logo/faveicon.png" type="image/x-icon">

    <!--=== fontaswesome ===-->

    <link rel="stylesheet" href="assets/fontaswesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/fontaswesome/css/fontawesome.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com/" />

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&amp;family=Roboto+Slab:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />

    <!--=== owl carousel css === -->

    <link rel="stylesheet" href="css/vendor/slick.css">

    <!--=== main css ===-->

    <link rel="stylesheet" href="css/vendor/jquery.modal.min.css" />

    <link rel="stylesheet" href="css/tailwind.css" />

    <link rel="stylesheet" href="css/custom.css" />

    <title>Kelvin Makau - <?php if ($page == "") {
                                echo " Software Developer";
                            } else if ($page == "About") {
                                echo " Who am i";
                            } else if ($page == "Work") {
                                echo " My projects";
                            } else if ($page == "Contact") {
                                echo " Reach out";
                            } else {
                                echo " " . $page;
                            } ?> </title>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC

        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {

            document.documentElement.classList.add("dark");

        } else {

            document.documentElement.classList.remove("dark");

        }
    </script>

</head>



<body>

    <!-- PRELOADER -->



    <!-- /PRELOADER -->





    <div class="bg-homeBg min-h-screen dark:bg-homeBg-dark bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full">

        <div class="z-50">

            <!-- container start -->

            <div class="container">

                <!-- header start for large screens -->

                <header class="flex justify-between items-center fixed top-0 left-0 w-full lg:static z-[1111111111]">

                    <div class="flex justify-between w-full px-4 lg:px-0 bg-[#F3F6F6] lg:bg-transparent dark:bg-black">

                        <div class="flex justify-between w-full items-center space-x-4 lg:my-8 my-5">

                            <!-- website logo -->

                            <a class="text-5xl font-semibold" href="?page=Home">

                                <img class="h-[26px] lg:h-[32px]" src="images/logo/logo1.png" alt="logo" />

                            </a>

                            <div class="flex items-center">

                                <!-- light and dark mode button -->

                                <button id="theme-toggle-mobile" type="button" class="dark-light-btn lg:hidden w-[44px] h-[44px] ml-2">

                                    <i id="theme-toggle-dark-icon-mobile" class="fa-solid text-xl fa-moon hidden"></i>

                                    <i id="theme-toggle-light-icon-mobile" class="fa-solid fa-sun text-xl hidden"></i>

                                </button>

                                <!-- mobile toggle button -->

                                <button id="menu-toggle" type="button" class="menu-toggle-btn">

                                    <i id="menu-toggle-open-icon" class="fa-solid fa-bars text-xl "></i>

                                    <i id="menu-toggle-close-icon" class="fa-solid fa-xmark text-xl hidden  "></i>

                                </button>

                            </div>

                        </div>

                    </div>



                    <!-- header items two for large screens -->

                    <nav class="hidden lg:block">

                        <ul class="flex my-12">

                            <li>

                                <a class="menu-item-two<?php if ($page == 'Home') {
                                                            echo '-active';
                                                        } ?>" href="?page=Home" title="Home">

                                    <span class="mr-2 text-base">

                                        <i class="fa-solid fa-house"></i>

                                    </span> Home </a>

                            </li>

                            <li>

                                <a class="menu-item-two<?php if ($page == 'About') {
                                                            echo '-active';
                                                        } ?>" href="?page=About" title="About me">

                                    <span class="mr-2 text-base">

                                        <i class="fa-regular fa-user"></i>

                                    </span> About </a>

                            </li>



                            <li>

                                <a class="menu-item-two<?php if ($page == 'Work') {
                                                            echo '-active';
                                                        } ?>" href="?page=Work" title="My work">

                                    <span class="mr-2 text-base">

                                        <i class="fas fa-briefcase"></i>

                                    </span> Work </a>

                            </li>

                            <!-- <li>

                                <a class="menu-item-two<?php //if($page == 'Blog'){echo '-active';} 
                                                        ?>" href="?page=Blog">

                                    <span class="mr-2 text-base">

                                        <i class="fa-brands fa-blogger"></i>

                                    </span> Blog </a>

                            </li>-->

                            <li>

                                <a class="menu-item-two<?php if ($page == 'Contact') {
                                                            echo '-active';
                                                        } ?>" href="?page=Contact" title="Contact me">

                                    <span class="mr-2 text-base">

                                        <i class="fa-solid fa-address-book"></i>

                                    </span> Contact </a>

                            </li>

                            <li>

                                <a class="menu-item-two<?php if ($page == 'Book') {
                                                            echo '-active';
                                                        } ?>" href="https://calendly.com/kevin92makau/30min" target="_blank" style="background-color:#0099cc;color:#fff">

                                    <span class="mr-2 text-base">

                                        <i class="fa-solid fa-coin"></i>

                                    </span> Demo </a>

                            </li>

                            <li>

                                <!-- light and dark mode button -->

                                <button id="theme-toggle" type="button" class="dark-light-btn w-[44px] h-[44px] ml-2">

                                    <i id="theme-toggle-dark-icon" class="fa-solid text-xl fa-moon hidden"></i>

                                    <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl hidden"></i>

                                </button>

                            </li>

                        </ul>

                    </nav>



                    <!-- mobile menu start -->

                    <nav id="navbar" class="hidden lg:hidden">

                        <ul class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">

                            <li>

                                <a class="mobile-menu-items<?php if ($page == 'Home') {
                                                                echo '-active';
                                                            } ?>" href="?page=Home" title="Home">

                                    <span class="mr-2 text-xl">

                                        <i class="fa-solid fa-house"></i>

                                    </span> Home </a>

                            </li>

                            <li>

                                <a class="mobile-menu-items<?php if ($page == 'About') {
                                                                echo '-active';
                                                            } ?>" href="?page=About" title="About me">

                                    <span class="mr-2 text-xl">

                                        <i class="fa-regular fa-user"></i>

                                    </span> About me </a>

                            </li>



                            <li>

                                <a class="mobile-menu-items<?php if ($page == 'Work') {
                                                                echo '-active';
                                                            } ?>" href="?page=Work" title="My work">

                                    <span class="mr-2 text-xl">

                                        <i class="fas fa-briefcase"></i>

                                    </span> Work </a>

                            </li>

                            <!--<li>

                                <a class="mobile-menu-items<?php //if($page == 'Blog'){echo '-active';} 
                                                            ?>" href="?page=Blog">

                                    <span class="mr-2 text-xl">

                                        <i class="fa-brands fa-blogger"></i>

                                    </span> Blog </a>

                            </li>-->

                            <li>

                                <a class="mobile-menu-items<?php if ($page == 'Contact') {
                                                                echo '-active';
                                                            } ?>" href="?page=Contact" title="Contact me">

                                    <span class="mr-2 text-xl">

                                        <i class="fa-solid fa-address-book"></i>

                                    </span> Contact </a>

                            </li>

                            <li>

                                <a class="menu-item-two<?php if ($page == 'Book') {
                                                            echo '-active';
                                                        } ?>" href="https://calendly.com/kevin92makau/30min" target="_blank" style="background-color:#0099cc;color:#fff">

                                    <span class="mr-2 text-base">

                                        <i class="fa-solid fa-coin"></i>

                                    </span> Demo </a>

                            </li>

                        </ul>

                    </nav>

                    <!-- mobile menu end -->

                </header>

                <!-- header  end -->



                <?php

                //page switching

                switch ($page) {

                    case 'About':

                        require("./pages/about_me.php");

                        exit;

                        break;

                    case 'Work':

                        require("./pages/my_work.php");

                        exit;

                        break;

                    case 'Contact':

                        require("./pages/contact_me.php");

                        exit;

                        break;

                    case 'Pay':
                        require("./pages/pay.php");

                        exit;

                        break;



                    default:

                        # code...

                        break;
                }



                ?>



                <!-- Home page contant start -->

                <div class="flex flex-col items-center h-[100vh] md:h-[90vh] lg:h-[80vh] xl:h-[71vh] justify-center aos-init aos-animate" data-aos="fade">

                    <!-- personal image -->

                    <img class="rounded-full w-[250px] h-[250px] 2xl:w-[280px] 2xl:h-[280px]" src="images/about/about2.png" alt="about avatar" />

                    <h3 class="mt-6 mb-1 text-5xl font-semibold dark:text-white"> Kelvin Makau </h3>

                    <p class="mb-4 text-[#7B7B7B]">Software Developer</p>

                    <!-- social link and social  buttons -->

                    <div class="flex space-x-3">



                        <!-- dribbble icon and link -->

                        <a href="https://github.com/kevalicious" target="_blank" rel="noopener noreferrer">

                            <span class="socialbtn text-[#e14a84]">

                                <i class="fa-brands fa-github"></i>

                            </span>

                        </a>

                        <!-- linkedin icon and link -->

                        <a href="https://www.linkedin.com/in/kevin-macau-42384a11b/" target="_blank" rel="noopener noreferrer">

                            <span class="socialbtn text-[#0072b1]">

                                <i class="fa-brands fa-linkedin-in"></i>

                            </span>

                        </a>

                        <!--behance-->
                        <a href="https://www.behance.net/neoverse" target="_blank" rel="noopener noreferrer">

                            <span class="socialbtn text-[#0072b1]">

                                <i class="fa-brands fa-linkedin-be">Be</i>

                            </span>

                        </a>


                    </div>

                    <!-- dowanload button -->

                    <!--end-->

                </div>

                <!-- footer section start -->

                <footer class="overflow-hidden rounded-b-2xl" style="background: transparent;">

                    <p class="text-center py-6 text-gray-lite dark:text-color-910"> © <script>
                            document.write(new Date().getFullYear());
                        </script>. <a class="hover:text-[#FA5252] duration-300 transition" href="mailto:kevin92makau@gmail.com" target="_blank" rel="noopener noreferrer"> Kelvin Makau</a>. </p>

                </footer>

                <!-- footer section end -->



                <!-- Home page contant End -->

            </div>

        </div>

    </div>





    <?php

    require("./includes/footer.php");

    ?>



</body>





</html>