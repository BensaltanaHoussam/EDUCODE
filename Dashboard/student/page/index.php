<?php 
require_once __DIR__ . '/../app/database/Database.php';

$database = new Database();
$db = $database->connect();

if ($db) {
    echo "Database connection successful.";
} else {
    echo "Database connection failed.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCODE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/images/LOOGOksajxd.png">
    <style>
        body {
            opacity: 0; /* Start with opacity 0 */
            animation: fadeIn 3s forwards; /* Fade in effect */
        }

        @keyframes fadeIn {
            from {
                opacity: 0; /* Start with opacity 0 */
            }
            to {
                opacity: 1; /* End with opacity 1 */
            }
        }

        .text-gradient {
            background: linear-gradient(to right, #fadf10, #fadf10);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.fade-in-on-scroll');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'fadeIn 1s forwards';
                    }
                });
            });

            elements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</head>

<body>

    <!-- main container -->
    <div class="min-h-screen flex flex-col fade-in-on-scroll">




        <header>

            <section class="fade-in-on-scroll">
                <nav
                    class="font-inter mx-auto h-auto w-full max-w-screen-2xl border border-b-black lg:relative lg:top-0">
                    <div
                        class="flex flex-col px-6 py-6 lg:flex-row lg:items-center lg:justify-between lg:px-10 lg:py-4 xl:px-20">
                        <a href="#">
                           <img class="w-[200px]" src="./img/LOOGO.png" alt="logo">
                        </a>
                        <div
                            class="mt-14 flex flex-col space-y-8 lg:mt-0 lg:flex lg:flex-row lg:space-x-1 lg:space-y-0">
                            <div class="relative flex flex-col">
                                <a href="#"
                                    class="flex flex-row rounded-lg lg:px-6 lg:py-2 text-gray-800 hover:bg-blue-600 duration-300 hover:text-white lg:border lg:border-blue-600 lg:bg-gray-50">
                                    Home
                                </a>
                            </div>
                            <a href="#" class="font-inter rounded-lg lg:px-6 lg:py-2  lg:hover:text-gray-800">
                                Courses </a>
                            <a href="#" class="font-inter rounded-lg lg:px-6 lg:py-2  lg:hover:text-gray-800">
                                About us </a>
                            <a href="#"
                                class="font-inter lg: rounded-lg pb-8 lg:px-6 lg:py-2 lg: lg:hover:text-gray-800"> FAQs
                            </a>
                        </div>
                        <div class="flex flex-col space-y-8 lg:flex lg:flex-row lg:space-x-3 lg:space-y-0">
                            <a href="#" class="font-inter rounded-lg lg:px-6 lg:py-4 lg: lg:hover:text-gray-800"> Sign
                                Up </a>
                            <a class="font-inter rounded-lg bg-black px-8 py-4 text-center text-white hover:bg-gray-800"
                                href="#"> Login </a>
                        </div>

                    </div>
                </nav>
            </section>
            <!-- Hero Container -->
            <div class="mx-auto border border-b-black w-full max-w-7xl px-5 py-16 md:px-10 md:py-20 fade-in-on-scroll">
                <!-- Component -->
                <div class="grid items-center justify-items-start gap-8 sm:gap-20 lg:grid-cols-2">
                    <!-- Hero Content -->
                    <div class="flex flex-col">
                        <!-- Hero Title -->
                        <h1 class="mb-4 text-4xl font-bold md:text-6xl"><span class="text-blue-500">EDUCODE</span> Learn code any time and any where .
                        </h1>
                        <p class="mb-6 max-w-lg text-sm text-gray-500 sm:text-xl md:mb-10 lg:mb-12"> Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus
                        </p>
                        <!-- Form -->
                        <form name="email-form" method="get"
                            class="relative mb-5 w-full max-w-xl pb-8 md:mb-6 lg:mb-4 lg:max-w-md">
                            <input type="email"
                                class="h-9 w-full rounded-md border border-solid border-black px-3 py-6 text-sm text-black placeholder:text-black"
                                placeholder="Search for courses" required="" />
                            <input type="submit" value="Search"
                                class="relative right-0 top-[5px] w-full cursor-pointer rounded-md bg-black px-6 py-2 text-center font-semibold text-white sm:absolute sm:right-[5px] sm:w-auto" />
                        </form>
                        <!-- Hero Info -->
                        <div class="grid w-full max-w-2xl grid-flow-row grid-cols-3 gap-4">
                            <div>
                                <h3 class="text-2xl font-bold md:text-3xl">10K+</h3>
                                <p class="text-sm text-gray-500">Customers</p>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold md:text-3xl">200K+</h3>
                                <p class="text-sm text-gray-500">Emails</p>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold md:text-3xl">500+</h3>
                                <p class="text-sm text-gray-500">Projects</p>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Image -->
                    <img src="./img/walpaperj.jpg" alt="" class="inline-block h-full w-full max-w-2xl" />
                </div>
            </div>
        </header>
    </div>


    <!-- Courses Categories Section  -->
    <section class=" py-8 px-4 bg-[url('./img/bg222.jpg')] bg-cover bg-center fade-in-on-scroll">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl text-white font-bold mb-4 bg-black/30 p-2 rounded-2xl">
                    Explore Our Courses
                    <span
                        class="bg-gradient-to-r from-blue-600 to-blue-300 bg-clip-text text-transparent">Categories</span>
                </h2>
                <p class="text-gray-200 max-w-2xl mx-auto">
                    Find the perfect course to enhance your skills and advance your career. Choose from our wide range
                    of professional courses designed by industry experts.
                </p>
            </div>

            <div class=" flex justify-center gap-8 ">


                <div
                    class="max-w-sm p-8 bg-white flex flex-col items-center hover:scale-105 transform duration-300 border border-gray-200 rounded-lg shadow-2xl shadow-blue-500 dark:bg-black dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            Front-End Courses</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">>Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order. >Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order. >Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class=" inline-flex  items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Show courses
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>



                <div
                    class="max-w-sm p-8 bg-white shadow-2xl shadow-blue-500 flex flex-col items-center hover:scale-105 transform duration-300 border border-gray-200 rounded-lg  dark:bg-black dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            Back-End Courses</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order. >Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order. >Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class=" inline-flex  items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Show courses
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>


                <div
                    class="max-w-sm p-8 bg-white shadow-2xl shadow-blue-500 flex flex-col items-center hover:scale-105 transform duration-300 border border-gray-200 rounded-lg  dark:bg-black dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            Design Courses</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">>Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order. >Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order. >Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class=" inline-flex  items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Show courses
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>



            </div>
        </div>
    </section>


    <!-- Courses Grid Section -->

    <section>
        <div class=" py-10 md:px-12 px-6">
            <h2 class="text-4xl font-bold text-gray-800 mb-6 text-center md:mb-11 fade-in-on-scroll">
                Our Popular <span
                    class="text-gradient bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-blue-600">Courses</span>
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <div
                    class="bg-white border border-blue-400 shadow-blue  rounded-lg shadow-md p-4 hover:scale-105 transition-transform fade-in-on-scroll">
                    <img src="./img/course-04.jpg" alt="Course Image" class="rounded-t-lg w-full">
                    <div class="py-3">
                        <p class="text-sm text-gray-500 flex items-center space-x-2">
                            <span><i class="ri-calendar-line"></i> 20 Nov, 2023</span>
                            <span><i class="ri-file-list-line"></i> 3 Curriculum</span>
                            <span><i class="ri-group-line"></i> 5 Students</span>
                        </p>
                        <h3 class="text-lg font-semibold text-gray-800 mt-2">Master Web Development</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Learn the basics of web development, including HTML, CSS, and JavaScript.
                        </p>
                        <div class="flex items-center justify-between mt-3 ">
                            <p class="text-blue-400 font-bold">Join course</p>

                        </div>
                    </div>
                </div>

                <div
                    class="bg-white border border-blue-400 shadow-blue  rounded-lg shadow-md p-4 hover:scale-105 transition-transform fade-in-on-scroll">
                    <img src="./img/course-11.jpg" alt="Course Image" class="rounded-t-lg w-full">
                    <div class="py-3">
                        <p class="text-sm text-gray-500 flex items-center space-x-2">
                            <span><i class="ri-calendar-line"></i> 18 Nov, 2023</span>
                            <span><i class="ri-file-list-line"></i> 4 Curriculum</span>
                            <span><i class="ri-group-line"></i> 8 Students</span>
                        </p>
                        <h3 class="text-lg font-semibold text-gray-800 mt-2">Business English Essentials</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Improve your business communication skills in English.
                        </p>
                        <div class="flex items-center justify-between mt-3 ">
                            <p class="text-blue-400 font-bold">Join course</p>

                        </div>
                    </div>
                </div>

                <div
                    class="bg-white border border-blue-400 shadow-blue  rounded-lg shadow-md p-4 hover:scale-105 transition-transform fade-in-on-scroll">
                    <img src="./img/course-02.jpg" alt="Course Image" class="rounded-t-lg w-full">
                    <div class="py-3">
                        <p class="text-sm text-gray-500 flex items-center space-x-2">
                            <span><i class="ri-calendar-line"></i> 15 Nov, 2023</span>
                            <span><i class="ri-file-list-line"></i> 5 Curriculum</span>
                            <span><i class="ri-group-line"></i> 12 Students</span>
                        </p>
                        <h3 class="text-lg font-semibold text-gray-800 mt-2">Python Programming Basics</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            A beginner-friendly course to learn Python programming.
                        </p>
                        <div class="flex items-center justify-between mt-3 ">
                            <p class="text-blue-400 font-bold">Join course</p>

                        </div>
                    </div>
                </div>

                <div
                    class="bg-white border border-blue-400 shadow-blue  rounded-lg shadow-md p-4 hover:scale-105 transition-transform fade-in-on-scroll">
                    <img src="./img/course-04.jpg" alt="Course Image" class="rounded-t-lg w-full">
                    <div class="py-3">
                        <p class="text-sm text-gray-500 flex items-center space-x-2">
                            <span><i class="ri-calendar-line"></i> 12 Nov, 2023</span>
                            <span><i class="ri-file-list-line"></i> 6 Curriculum</span>
                            <span><i class="ri-group-line"></i> 15 Students</span>
                        </p>
                        <h3 class="text-lg font-semibold text-gray-800 mt-2">Graphic Design Basics</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Learn to design beautiful graphics using Photoshop and Canva.
                        </p>
                        <div class="flex items-center justify-between mt-3 ">
                            <p class="text-blue-400 font-bold">Join course</p>

                        </div>
                    </div>
                </div>

                <div
                    class="bg-white border border-blue-400 shadow-blue  rounded-lg shadow-md p-4 hover:scale-105 transition-transform fade-in-on-scroll">
                    <img src="./img/course-05.jpg" alt="Course Image" class="rounded-t-lg w-full">
                    <div class="py-3">
                        <p class="text-sm text-gray-500 flex items-center space-x-2">
                            <span><i class="ri-calendar-line"></i> 10 Nov, 2023</span>
                            <span><i class="ri-file-list-line"></i> 4 Curriculum</span>
                            <span><i class="ri-group-line"></i> 10 Students</span>
                        </p>
                        <h3 class="text-lg font-semibold text-gray-800 mt-2">Digital Marketing Strategies</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Master digital marketing to grow your business online.
                        </p>
                        <div class="flex items-center justify-between mt-3 ">
                            <p class="text-blue-400 font-bold">Join course</p>

                        </div>
                    </div>
                </div>

                <div
                    class="bg-white border border-blue-400 shadow-blue  rounded-lg shadow-md p-4 hover:scale-105 transition-transform fade-in-on-scroll">
                    <img src="./img/course-06.jpg" alt="Course Image" class="rounded-t-lg w-full">
                    <div class="py-3">
                        <p class="text-sm text-gray-500 flex items-center space-x-2">
                            <span><i class="ri-calendar-line"></i> 8 Nov, 2023</span>
                            <span><i class="ri-file-list-line"></i> 3 Curriculum</span>
                            <span><i class="ri-group-line"></i> 7 Students</span>
                        </p>
                        <h3 class="text-lg font-semibold text-gray-800 mt-2">English Classes</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Discover the principles of user interface and experience design.
                        </p>
                        <div class="flex items-center justify-between mt-3 ">
                            <p class="text-blue-400 font-bold">Join course</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-4 md:px-10 fade-in-on-scroll">
            <!-- Title -->
            <h2 class="text-center text-3xl font-bold md:text-5xl border border-black p-4"> Our Team Members </h2>
            <p class="mx-auto mb-8 mt-4 text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16"> Lorem ipsum
                dolor sit amet elit ut aliquam </p>
            <!-- Content -->
            <div
                class="grid grid-cols-2 justify-center justify-items-center gap-5 sm:justify-items-stretch md:grid-cols-1 md:gap-8 lg:grid-cols-2">
                <!-- Item -->
                <div
                    class="grid w-full grid-flow-row justify-center gap-6 rounded-md border border-solid border-gray-300 p-8 md:grid-cols-2">
                    <img src="./img/pr1.jpg" alt="" class="inline-block h-72 w-full object-cover" />
                    <div>
                        <p class="text-xl font-semibold">John</p>
                        <p class="mb-4 font-semibold text-gray-500"> Webflow Developer </p>
                        <p class="text-sm text-gray-500 sm:text-base"> Lorem ipsum dolor sit amet consectetur adipiscing
                            elit ut aliquam, purus sit. Lorem ipsum dolor sit amet, &nbsp;elit ut aliquam, purus sit
                            amet luctus venenatis elit ut aliquam, purus sit amet luctus venenatis </p>
                    </div>
                </div>
                <!-- Item -->
                <div
                    class="grid w-full grid-flow-row justify-center gap-6 rounded-md border border-solid border-gray-300 p-8 md:grid-cols-2">
                    <img src="./img/pr2.jpg" alt="" class="inline-block h-72 w-full object-cover" />
                    <div>
                        <p class="text-xl font-semibold">Anniyah</p>
                        <p class="mb-4 font-semibold text-gray-500"> Webflow Developer </p>
                        <p class="text-sm text-gray-500 sm:text-base"> Lorem ipsum dolor sit amet consectetur adipiscing
                            elit ut aliquam, purus sit. Lorem ipsum dolor sit amet, &nbsp;elit ut aliquam, purus sit
                            amet luctus venenatis elit ut aliquam, purus sit amet luctus venenatis </p>
                    </div>
                </div>
                <!-- Item -->
                <div
                    class="grid w-full grid-flow-row justify-center gap-6 rounded-md border border-solid border-gray-300 p-8 md:grid-cols-2">
                    <img src="./img/pr3.webp" alt="" class="inline-block h-72 w-full object-cover" />
                    <div>
                        <p class="text-xl font-semibold">Kevin</p>
                        <p class="mb-4 font-semibold text-gray-500"> Webflow Developer </p>
                        <p class="text-sm text-gray-500 sm:text-base"> Lorem ipsum dolor sit amet consectetur adipiscing
                            elit ut aliquam, purus sit. Lorem ipsum dolor sit amet, &nbsp;elit ut aliquam, purus sit
                            amet luctus venenatis elit ut aliquam, purus sit amet luctus venenatis </p>
                    </div>
                </div>
                <!-- Item -->
                <div
                    class="grid w-full grid-flow-row justify-center gap-6 rounded-md border border-solid border-gray-300 p-8 md:grid-cols-2">
                    <img src="./img/pr1.jpg" alt="" class="inline-block h-72 w-full object-cover" />
                    <div>
                        <p class="text-xl font-semibold">Tamara</p>
                        <p class="mb-4 font-semibold">Webflow Developer</p>
                        <p class="text-sm text-gray-500 sm:text-base"> Lorem ipsum dolor sit amet consectetur adipiscing
                            elit ut aliquam, purus sit. Lorem ipsum dolor sit amet, &nbsp;elit ut aliquam, purus sit
                            amet luctus venenatis elit ut aliquam, purus sit amet luctus venenatis </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <!-- Container -->
        <div class="mx-auto flex flex-col gap-y-16 px-5 py-24 sm:gap-y-20 md:px-10 fade-in-on-scroll">
            <!-- Heading -->
            <h2 class="text-center text-3xl font-bold md:text-5xl"> What Our Customers Say </h2>
            <!-- Content Container -->
            <div class="mx-auto grid grid-cols-1 items-center gap-x-20 gap-y-10 sm:gap-y-14 md:grid-cols-2">
                <!-- Image -->
                <div class="place-self-stretch overflow-hidden rounded-lg">
                    <img src="./img/walpaper.jpg" alt=""
                        class="inline-block h-full w-full max-w-lg object-cover" />
                </div>
                <!-- Contents -->
                <div class="grid gap-6 md:gap-8">
                    <!-- Content -->
                    <div class="space-y-1">
                        <div class="flex items-center mb-5">
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <span class="ml-5 text-sm text-gray-500">JESSICA S.</span>
                        </div>
                        <p class="max-w-lg text-base mt-5"> Lorem ipsum dolor sit amet, elit ut aliquam, purus sit amet
                            luctus venenatis elit ut aliquam, purus sit amet luctus venenatis,Lorem ipsum dolor sit
                            amet, elit ut aliquam. </p>
                    </div>
                    <!-- Content -->
                    <div class="space-y-1">
                        <div class="flex items-center mb-5">
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <span class="ml-5 text-sm text-gray-500">JESSICA S.</span>
                        </div>
                        <p class="max-w-lg text-base"> Lorem ipsum dolor sit amet, elit ut aliquam, purus sit amet
                            luctus venenatis elit ut aliquam, purus sit amet luctus venenatis,Lorem ipsum dolor sit
                            amet, elit ut aliquam. </p>
                    </div>
                    <!-- Content -->
                    <div class="space-y-1">
                        <div class="flex items-center mb-5">
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <span class="ml-5 text-sm text-gray-500">JESSICA S.</span>
                        </div>
                        <p class="max-w-lg text-base"> Lorem ipsum dolor sit amet, elit ut aliquam, purus sit amet
                            luctus venenatis elit ut aliquam, purus sit amet luctus venenatis,Lorem ipsum dolor sit
                            amet, elit ut aliquam. </p>
                    </div>
                    <!-- Content -->
                    <div class="space-y-1">
                        <div class="flex items-center mb-5">
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947e84e6cf91_Vector.svg"
                                alt="" class="mr-1 inline-block w-3.5 flex-none" />
                            <span class="ml-5 text-sm text-gray-500">JESSICA S.</span>
                        </div>
                        <p class="max-w-lg text-base"> Lorem ipsum dolor sit amet, elit ut aliquam, purus sit amet
                            luctus venenatis elit ut aliquam, purus sit amet luctus venenatis,Lorem ipsum dolor sit
                            amet, elit ut aliquam. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <footer class="block fade-in-on-scroll">
        <!-- Container -->
        <div class="py-16 md:py-20 border border-t-black mx-auto w-full max-w-7xl px-5 md:px-10">
            <!-- Component -->
            <div class="flex-col flex items-center">
                <a href="#" class="mb-8 inline-block max-w-full text-black">
                    <img src="./img/LOOGO.png"
                        alt="" class="inline-block max-h-10" />
                </a>
                <div class="text-center font-semibold">
                    <a href="#" class="inline-block px-6 py-2 font-normal text-black transition hover:text-blue-600">
                        About </a>
                    <a href="#" class="inline-block px-6 py-2 font-normal text-black transition hover:text-blue-600">
                        Features </a>
                    <a href="#" class="inline-block px-6 py-2 font-normal text-black transition hover:text-blue-600">
                        Works </a>
                    <a href="#" class="inline-block px-6 py-2 font-normal text-black transition hover:text-blue-600">
                        Support </a>
                    <a href="#" class="inline-block px-6 py-2 font-normal text-black transition hover:text-blue-600">
                        Help </a>
                </div>
                <div class="mb-8 mt-8 border-b border-gray-300 w-48"></div>
                <div class="mb-12 grid-cols-4 grid-flow-col grid w-full max-w-52 gap-3">
                    <a href="#" class="mx-auto flex-col flex max-w-6 items-center justify-center text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a945b4ae6cf7b_Vector-1.svg"
                            alt="" class="inline-block" />
                    </a>
                    <a href="#" class="mx-auto flex-col flex max-w-6 items-center justify-center text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a945560e6cf77_Vector.svg"
                            alt="" class="inline-block" />
                    </a>
                    <a href="#" class="mx-auto flex-col flex max-w-6 items-center justify-center text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a940535e6cf7a_Vector-3.svg"
                            alt="" class="inline-block" />
                    </a>
                    <a href="#" class="mx-auto flex-col flex max-w-6 items-center justify-center text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a9433a9e6cf88_Vector-2.svg"
                            alt="" class="inline-block" />
                    </a>
                </div>
                <p class="text-sm sm:text-base"> © Copyright 2021. All rights reserved. </p>
            </div>
        </div>
    </footer>

</body>



</html>