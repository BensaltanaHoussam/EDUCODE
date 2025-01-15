<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCODE</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

</head>



<body>







    <section>
        <!-- Container -->
        <div class="grid gap-0 md:h-screen md:grid-cols-2">
            <!-- Component -->
            <div class="flex items-center justify-center px-5 py-16 md:px-10 md:py-20">
                <div class="max-w-md text-center">
                    <h2 class="mb-8 text-3xl font-bold md:mb-12 md:text-5xl lg:mb-16"> Sign up and start coding today
                    </h2>
                    <!-- Form -->
                    <div class="mx-auto max-w-sm mb-4 pb-4">
                        <form name="wf-form-password" method="get">
                            <div class="relative mb-4">
                                <img class="w-[30px] translate-x-3 translate-y-[42px]" alt=""
                                    src="https://img.icons8.com/ios-filled/50/user.png"
                                    class="absolute left-5 top-3 inline-block" />
                                <input type="text"
                                    class="mb-4 block h-9 w-full rounded-md border border-solid border-black px-3 py-6 pl-14 text-sm text-black placeholder:text-black"
                                    placeholder="fullname" required="" />
                            </div>
                            <div class="relative">
                                <img alt=""
                                    src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a9455fae6cf89_EnvelopeSimple.svg"
                                    class="absolute left-5 top-3 inline-block" />
                                <input type="email"
                                    class="mb-4 block h-9 w-full rounded-md border border-solid border-black px-3 py-6 pl-14 text-sm text-black placeholder:text-black"
                                    placeholder="Email Address" required="" />
                            </div>
                            <div class="relative mb-4">
                                <img alt=""
                                    src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a946794e6cf8a_Lock-2.svg"
                                    class="absolute left-5 top-3 inline-block" />
                                <input type="password"
                                    class="mb-4 block h-9 w-full rounded-md border border-solid border-black px-3 py-6 pl-14 text-sm text-black placeholder:text-black"
                                    placeholder="Password (min 8 characters)" required="" />
                            </div>
                            <label class="mb-6 flex items-center justify-start pb-12 pl-5 font-medium md:mb-10 lg:mb-1">
                                <input type="checkbox" name="checkbox" class="float-left mt-1" />
                                <span class="ml-4 inline-block cursor-pointer text-sm" htmlFor="checkbox"> I agree with
                                    the <a href="#" class="font-bold"> Terms &amp; Conditions </a>
                                </span>
                            </label>
                            <input type="submit" value="Sign up"
                                class="inline-block w-full cursor-pointer items-center bg-black px-6 py-3 text-center font-semibold text-white" />
                        </form>
                    </div>
                    <p class="text-sm text-gray-500 sm:text-sm"> Already have an account? <a href="#"
                            class="font-bold text-black">
                            <span> </span> Login now
                        </a>
                    </p>
                </div>
            </div>
            <!-- Component -->
            <div class="flex items-center justify-center bg-[url('../../EDUCODE/public/img/bg222.jpg')] bg-cover bg-center">
                <div class="mx-auto max-w-md px-5 py-16 md:px-10 md:py-24 lg:py-32">
                    <div class="mb-5 flex h-14 w-14 flex-col items-center justify-center bg-white md:mb-6 lg:mb-8">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a949eade6cf7d_Vector-2.svg"
                            alt="" class="inline-block" />
                    </div>
                    <p class="mb-8 text-2xl  text-white text-center ">A coding courses website is your gateway to mastering the skills of tomorrow. Whether you're a beginner or looking to advance your knowledge, these platforms offer structured lessons, hands-on practice, and supportive communities to help you succeed. With flexible learning paths, you can learn at your own pace and unlock new career opportunities. </p>
                    <p class="text-sm font-bold sm:text-base">John Robert</p>
                    <p class="text-sm sm:text-sm">Senior Webflow Developer</p>
                </div>
            </div>
        </div>
    </section>











</body>

</html>