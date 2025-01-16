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
            opacity: 0;
            /* Start with opacity 0 */
            animation: fadeIn 3s forwards;
            /* Fade in effect */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                /* Start with opacity 0 */
            }

            to {
                opacity: 1;
                /* End with opacity 1 */
            }
        }

        .text-gradient {
            background: linear-gradient(to right, #fadf10, #fadf10);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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

    <section>

        <section class="fade-in-on-scroll">
            <nav class="font-inter mx-auto h-auto w-full max-w-screen-2xl border border-b-black lg:relative lg:top-0">
                <div
                    class="flex flex-col px-6 py-6 lg:flex-row lg:items-center lg:justify-between lg:px-10 lg:py-4 xl:px-20">
                    <a href="#">
                        <img class="w-[200px]" src="../../../public/img/LOOGO.png" alt="logo">
                    </a>
                    <div class="mt-14 flex flex-col space-y-8 lg:mt-0 lg:flex lg:flex-row lg:space-x-1 lg:space-y-0">
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
                        <a href="#" class="font-inter lg: rounded-lg pb-8 lg:px-6 lg:py-2 lg: lg:hover:text-gray-800">
                            FAQs
                        </a>
                    </div>
                    <div class="flex flex-col space-y-8 lg:flex lg:flex-row lg:space-x-3 lg:space-y-0">

                        <a class="font-inter rounded-lg bg-black px-8 py-4 text-center text-white hover:bg-gray-800"
                            href="#"> Logout </a>
                    </div>

                </div>
            </nav>
        </section>
        <!-- Section Container -->
        <div class="flex flex-col items-center justify-center px-5 md:px-10">
            <!-- Title Container -->
            <div
                class="flex  flex-col items-start bg-[url('../../../public/img/TERMS.png')] bg-cover bg-center py-12 sm:py-12 lg:items-center">
                <!-- Component -->

                <div class="flex flex-col gap-8 px-8 justify-center py-5">
                    <h1 class="mb-2 text-3xl text-white font-bold md:text-5xl ">Welcome Houssam Bensaltana</h1>
                    <p class="mb-8 text-white   rounded-xl p-4 text-xl">It's wonderful to see you taking on the role of
                        teaching our students! We value your dedication and commitment to fostering a positive learning
                        environment. To ensure a smooth and successful experience, we encourage you to carefully read
                        and familiarize yourself with the terms outlined below. These terms are designed to help you
                        understand your rights and responsibilities as a Flow Teacher, and provide clarity on the
                        expectations we have for both teachers and students. By reviewing this information, you'll be
                        better equipped to navigate your teaching journey with us, while also ensuring that you maintain
                        a supportive and effective relationship with your students. Should you have any questions or
                        need further clarification, we're here to support you every step of the way</p>
                </div>

            </div>
            <!-- Terms Container -->
            <div class="mx-auto w-full max-w-5xl py-12 md:py-16 lg:py-20">
                <p class="mb-5 text-base font-extrabold uppercase">Last updated as of junary 18, 2025</p>
                <div class="mb-6 min-h-[1px] min-w-full bg-[#e2e2e2]"></div>
                <!-- Term -->
                <div class="mb-6 flex flex-col gap-y-3 items-center text-center">
                    <p class="text-sm font-bold uppercase sm:text-base">Services</p>
                    <p class="text-sm sm:text-base">Flowspark offers a range of design services, including but not
                        limited to graphic design, web design, branding, and illustration. The Company will provide the
                        agreed-upon services with professionalism and expertise, following industry standards and best
                        practices. The specific details, deliverables, timelines, and pricing for each project will be
                    </p>
                </div>
                <!-- Term -->
                <div class="mb-6 flex flex-col items-start gap-y-3">
                    <p class="font-bold uppercase sm:text-base">Client Responsibilities</p>
                    <p class="text-sm sm:text-base">The client agrees to provide accurate and timely information,
                        materials, and feedback necessary for the successful completion of the project. The client is
                        responsible for obtaining any necessary permissions, licenses, or copyrights for materials
                        provided to the Company for use in the project. The client acknowledges that delays or failures
                        in providing required materials or feedback may impact project timelines and deliverables.</p>
                </div>
                <!-- Term -->
                <div class="mb-6 flex flex-col items-start gap-y-3">
                    <p class="font-bold uppercase sm:text-base">Intellectual Property</p>
                    <p class="text-sm sm:text-base">Any intellectual property rights, including but not limited to
                        copyrights and trademarks, in the final deliverables created by the Company shall be transferred
                        to the client upon receipt of full payment, unless otherwise agreed upon in writing. The client
                        warrants that any materials provided to the Company for use in the project do not infringe upon
                        the intellectual property rights of any third party.</p>
                </div>
                <!-- Term -->
                <div class="mb-6 flex flex-col items-start gap-y-3">
                    <p class="font-bold uppercase sm:text-base">Payment</p>
                    <p class="text-sm sm:text-base">The client agrees to pay the Company the agreed-upon fees for the
                        services rendered. Payment terms, including the amount, method, and schedule, will be specified
                        in the separate agreement or proposal. The Company reserves the right to suspend or terminate
                        services in the event of non-payment or late payment.</p>
                </div>
                <!-- Term -->
                <div class="mb-6 flex flex-col items-start gap-y-3">
                    <p class="font-bold uppercase sm:text-base">Confidentiality</p>
                    <p class="text-sm sm:text-base">The Company and the client agree to keep confidential any
                        proprietary or sensitive information disclosed during the course of the project. Both parties
                        shall take reasonable measures to protect such information from unauthorized access or
                        disclosure.</p>
                </div>
                <!-- Term -->
                <div class="mb-6 flex flex-col items-start gap-y-3">
                    <p class="font-bold uppercase sm:text-base">Limitation of Liability</p>
                    <p class="text-sm sm:text-base">The Company shall not be liable for any direct, indirect,
                        incidental, or consequential damages arising out of the use or inability to use the services
                        provided. The client acknowledges that the Company's liability is limited to the amount paid for
                        the services rendered.</p>
                </div>
                <!-- Term -->
                <div class="mb-6 flex flex-col items-start gap-y-3">
                    <p class="font-bold uppercase sm:text-base">Termination</p>
                    <p class="text-sm sm:text-base">Either party may terminate this Agreement with written notice if the
                        other party breaches any material provision and fails to remedy the breach within a reasonable
                        time. In the event of termination, the client shall pay the Company for the services provided up
                        to the termination date.</p>
                </div>
                <!-- Term -->
                <div class="mb-6 flex flex-col items-start gap-y-3">
                    <p class="font-bold uppercase sm:text-base">Governing Law</p>
                    <p class="text-sm sm:text-base">This Agreement shall be governed by and construed in accordance with
                        the laws of [Your Jurisdiction]. Any disputes arising out of this Agreement shall be subject to
                        the exclusive jurisdiction of the courts of [Your Jurisdiction].</p>
                </div>
                <!-- Term -->
                <div class="mb-10 mt-10 min-h-[1px] min-w-full bg-[#e2e2e2]"></div>
                <p class="mb-6 text-sm sm:text-base">By accessing, browsing, or utilizing any design services,
                    communication channels, or materials provided by Flowspark, including but not limited to graphic
                    design, web design, branding, illustration, and user interface design, whether through our website,
                    email, phone, or any other means, you expressly acknowledge, understand, and agree that you have
                    carefully read, comprehended, and fully consent to be legally.</p>
            </div>
        </div>
    </section>

</body>



</html>