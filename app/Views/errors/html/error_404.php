<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">

    <!--<style>-->
    <!--    div.logo {-->
    <!--        height: 200px;-->
    <!--        width: 155px;-->
    <!--        display: inline-block;-->
    <!--        opacity: 0.08;-->
    <!--        position: absolute;-->
    <!--        top: 2rem;-->
    <!--        left: 50%;-->
    <!--        margin-left: -73px;-->
    <!--    }-->
    <!--    body {-->
    <!--        height: 100%;-->
    <!--        background: #fafafa;-->
    <!--        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;-->
    <!--        color: #777;-->
    <!--        font-weight: 300;-->
    <!--    }-->
    <!--    h1 {-->
    <!--        font-weight: lighter;-->
    <!--        letter-spacing: normal;-->
    <!--        font-size: 3rem;-->
    <!--        margin-top: 0;-->
    <!--        margin-bottom: 0;-->
    <!--        color: #222;-->
    <!--    }-->
    <!--    .wrap {-->
    <!--        max-width: 1024px;-->
    <!--        margin: 5rem auto;-->
    <!--        padding: 2rem;-->
    <!--        background: #fff;-->
    <!--        text-align: center;-->
    <!--        border: 1px solid #efefef;-->
    <!--        border-radius: 0.5rem;-->
    <!--        position: relative;-->
    <!--    }-->
    <!--    pre {-->
    <!--        white-space: normal;-->
    <!--        margin-top: 1.5rem;-->
    <!--    }-->
    <!--    code {-->
    <!--        background: #fafafa;-->
    <!--        border: 1px solid #efefef;-->
    <!--        padding: 0.5rem 1rem;-->
    <!--        border-radius: 5px;-->
    <!--        display: block;-->
    <!--    }-->
    <!--    p {-->
    <!--        margin-top: 1.5rem;-->
    <!--    }-->
    <!--    .footer {-->
    <!--        margin-top: 2rem;-->
    <!--        border-top: 1px solid #efefef;-->
    <!--        padding: 1em 2em 0 2em;-->
    <!--        font-size: 85%;-->
    <!--        color: #999;-->
    <!--    }-->
    <!--    a:active,-->
    <!--    a:link,-->
    <!--    a:visited {-->
    <!--        color: #dd4814;-->
    <!--    }-->
    <!--</style>-->
</head>
<body class="bg-[#000]">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8RK5FJX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header id="header" class="fixed z-[999] top-0 w-full transition duration-500 ease-in-out">
        <div id="reserve"
            class="relative isolate flex items-center gap-x-6 overflow-hidden bg-[#FFD9B8] px-6 py-2 sm:px-3.5 sm:before:flex-1">
            <div class="flex flex-wrap items-center gap-x-4 gap-y-1">
                <p class="text-[14px] lg:text-[17px] font-medium leading-6 text-gray-900">
                    Schedule your free counselling session 
                </p>
                <button data-modal-target="modal1"
                    class="flex-none rounded-md bg-[#B5341D] px-3.5 py-1 lg:py-2 text-[14px] text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Register Today</a>
            </div>
            <div class="flex flex-1 justify-end">
                <button type="button" id="closeReserve" class="-m-3 px-3 py-2 focus-visible:outline-offset-[-4px]">
                    <span class="sr-only">Dismiss</span>
                    <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path
                            d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>
                </button>
            </div>
        </div>
        <nav class="p-4 lg:px-8 bg-gradient-to-b from-[#000000] to-[transparent]">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center">
                    <div>
                        <a href="/">
                            <img src="./assets/img/brand-logo/moople-brand-logo.png" alt="moople brand logo" width="120"
                                height="100%">
                        </a>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <ul class="hidden lg:flex items-center gap-x-6">
                            <li>
                                <a class="text-white" href="about">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a class="text-white" href="career">
                                    Career
                                </a>
                            </li>
                            <li>
                                <a class="text-white" href="contact">
                                    Apply Now
                                </a>
                            </li>
                        </ul>
                        <div>
                            <button id="openDrawer" class="px-1 py-1 text-white rounded" aria-labelledby="drawer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="relative z-[999] hidden" id="drawer" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <div id="drawerOverlay" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity opacity-0"
            aria-hidden="true"></div>
        <div class="overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div id="drawerPanel"
                        class="pointer-events-auto relative w-screen max-w-sm transform translate-x-full transition-transform ease-in-out duration-500 sm:duration-700">
                        <div class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4">
                            <button id="closeDrawer" type="button"
                                class="relative rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                <span class="absolute -inset-2.5"></span>
                                <span class="sr-only">Close panel</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex h-full flex-col overflow-y-scroll bg-[#262626] py-6 shadow-xl">
                            <div class="px-4 sm:px-6">
                                <img class="mb-5" src="assets/img/brand-logo/moople-brand-logo.png" alt="" width="120px"
                                    height="100%">
                            </div>
                            <hr class="opacity-35">
                            <div class="relative mt-6 flex-1 px-4 sm:px-6">
                                <div>
                                    <ul>
                                        <li class="border-b border-[#545454]">
                                            <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                href="/">Home</a>
                                        </li>
                                        <li class="border-b border-[#545454]">
                                            <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                href="/about">About us</a>
                                        </li>
                                        <li class="border-b border-[#545454]">
                                            <button
                                                class="dropdown-button text-white text-[18px] py-2 px-3 text-left flex justify-between items-center w-full hover:bg-[#545454]">
                                                <span>Courses</span>
                                                <span class="dropdown-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        fill="currentColor" class="w-4 h-4">
                                                        <path
                                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                    </svg>
                                                </span>
                                            </button>
                                            <ul
                                                class="dropdown-menu ps-5 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                                <li class="border-b border-[#545454]">
                                                    <button
                                                        class="dropdown-button text-white text-[18px] py-2 px-3 text-left flex justify-between items-center w-full hover:bg-[#545454]">
                                                        <span>Animation Courses</span>
                                                        <span class="dropdown-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                fill="currentColor" class="w-4 h-4">
                                                                <path
                                                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    <ul
                                                        class="dropdown-menu ps-5 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                                        <li class="border-b border-[#545454]">
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="bsc-in-animation">BSc in Animation Film Making</a> 
                                                        </li>
                                                        <li class="border-b border-[#545454]">
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="animation-course">Advanced 3D Animation & AI</a> 
                                                        </li>
                                                        <li class="border-b border-[#545454]">
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="2d-animation-course">2D Animation & AI</a> 
                                                        </li>
                                                        <li>
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="3d-modelling-course">3d Modelling and AI</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="border-b border-[#545454]">
                                                    <button
                                                        class="dropdown-button text-white text-[18px] py-2 px-3 text-left flex justify-between items-center w-full hover:bg-[#545454]">
                                                        <span>VFX Courses</span>
                                                        <span class="dropdown-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                fill="currentColor" class="w-4 h-4">
                                                                <path
                                                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    <ul
                                                        class="dropdown-menu ps-5 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                                        <li class="border-b border-[#545454]">
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="bsc-in-vfx">BSc in VFX Film Making</a> 
                                                        </li>
                                                        <li class="border-b border-[#545454]">
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="vfx-course">Visual Effects & AI</a> 
                                                        </li>
                                                        <li>
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="motion-graphic-video-editing-course">Motion Graphics, Video Editing & AI</a> 
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="border-b border-[#545454]">
                                                    <button
                                                        class="dropdown-button text-white text-[18px] py-2 px-3 text-left flex justify-between items-center w-full hover:bg-[#545454]">
                                                        <span>Graphics Design Courses</span>
                                                        <span class="dropdown-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                fill="currentColor" class="w-4 h-4">
                                                                <path
                                                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    <ul
                                                        class="dropdown-menu ps-5 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                                        <li class="border-b border-[#545454]">
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="graphic-design-course">Advanced Graphic Design & AI</a> 
                                                        </li>
                                                        <li>
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="graphic-design-and-ai">Graphic Design and AI</a> 
                                                        </li> 
                                                    </ul>
                                                </li>
                                                <li class="border-b border-[#545454]">
                                                    <button
                                                        class="dropdown-button text-white text-[18px] py-2 px-3 text-left flex justify-between items-center w-full hover:bg-[#545454]">
                                                        <span>Web Design Courses</span>
                                                        <span class="dropdown-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                fill="currentColor" class="w-4 h-4">
                                                                <path
                                                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    <ul
                                                        class="dropdown-menu ps-5 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                                        <li class="border-b border-[#545454]">
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="web-design-course">Web Design & AI</a> 
                                                        </li>
                                                        <li>
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="ui-ux-design-course">UI/UX Design & AI</a> 
                                                        </li> 
                                                    </ul>
                                                </li>
                                                <li class="border-b border-[#545454]">
                                                    <button
                                                        class="dropdown-button text-white text-[18px] py-2 px-3 text-left flex justify-between items-center w-full hover:bg-[#545454]">
                                                        <span>Digital Marketing Course</span>
                                                        <span class="dropdown-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                fill="currentColor" class="w-4 h-4">
                                                                <path
                                                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    <ul
                                                        class="dropdown-menu ps-5 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                                        <li class="border-b border-[#545454]">
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="digital-marketing-course">Digital Marketing & AI</a> 
                                                        </li>
                                                        <li>
                                                            <a class="text-white text-[17px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                            href="bba-in-digital-marketing">BBA in Digital Marketing</a> 
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                        href="game-development-course">3D Gaming</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="border-b border-[#545454]">
                                            <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                href="placement">Placement</a>
                                        </li>
                                        <li class="border-b border-[#545454]">
                                            <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                href="payment">Payment</a>
                                        </li>
                                        <li class="border-b border-[#545454]">
                                            <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                href="centres">Centres</a>
                                        </li>
                                        <li class="border-b border-[#545454]">
                                            <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]" href="partner-with-moople">
                                                Partner With Moople
                                            </a>
                                        </li>
                                        <li class="border-b border-[#545454]">
                                            <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                href="contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-[600px] relative">
        <div class="absolute top-[55%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#121212] max-w-full w-[900px] px-10 pb-10 pt-5 rounded-xl">
            <h1 class="text-white text-[120px] text-center font-bold leading-tight">404</h1>
            <p class="text-white text-[25px] text-center font-medium">Page Not Found</p>
            <p class="text-white text-center">
                <?php if (ENVIRONMENT !== 'production') : ?>
                    <?= nl2br(esc($message)) ?>
                <?php else : ?>
                    <?= lang('Errors.sorryCannotFind') ?>
                <?php endif; ?>
            </p>
        </div>
    </div>
<Footer class="bg-[#121212] pt-[220px] lg:pt-[60px] mt-20 relative">
    <div class="container mx-auto px-4">
        <div
            class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] px-3 py-5 rounded-[20px] lg:rounded-[60px] absolute left-[50%] translate-x-[-50%] -top-[110px] lg:-top-[70px] max-w-[95%] w-[1300px]">
            <div class="flex flex-wrap justify-center gap-y-5">
                <div class="w-full lg:w-[70%] px-2">
                    <p class="text-[#FFF] text-[25px] font-semibold">Moople Placement Newsletter</p>
                    <p class="text-white">Stay updated with our Placement Newsletter! The annual edition brings you the
                        latest updates on job placements and success stories. Whether you're a student or an aspirant
                        our newsletter keeps you informed and inspired.</p>
                </div>
                <div class="w-full lg:w-[20%] px-2 flex justify-center flex-col">
                    <div class="flex justify-between gap-x-2">
                        <a href="./assets/pdf/Moople-Placement-Newsletter.pdf" download="Moople Placement Newsletter"
                            class="bg-[#003366] border-2 border-[#003366] hover:bg-[#00336691] hover:text-[#FFFFFF] transition duration-200 ease px-12 py-2 mx-auto rounded-lg text-[#FFF] flex items-center gap-x-2"><img
                                src="./assets/icons/download.svg" alt="" width="20" height="20"> Download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap gap-y-5 pt-12 pb-6">
            <div class="w-full lg:w-[30%] px-2">
                <div>
                    <img class="mb-5" src="assets/img/brand-logo/moople-brand-logo.png" alt="" width="180px"
                        height="100%">
                    <div class="flex gap-3 items-start pt-5">
                        <div class="flex gap-4">
                            <a href="https://www.facebook.com/moople.in"
                                class="border-[2px] border-[#434343] rounded-full p-2 hover:bg-[#ffffff45]" aria-label="facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="white"
                                        d="M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2 C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/moople.in/"
                                class="border-[2px] border-[#434343] rounded-full p-2 hover:bg-[#ffffff45]" aria-label="instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                    viewBox="0 0 32 32">
                                    <path fill="white"
                                        d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://x.com/i/flow/login?redirect_after_login=%2Fmoopleanimation"
                                class="border-[2px] border-[#434343] rounded-full p-2 hover:bg-[#ffffff45]" aria-label="twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                    viewBox="0 0 30 30">
                                    <path fill="white"
                                        d="M26.37,26l-8.795-12.822l0.015,0.012L25.52,4h-2.65l-6.46,7.48L11.28,4H4.33l8.211,11.971L12.54,15.97L3.88,26h2.65 l7.182-8.322L19.42,26H26.37z M10.23,6l12.34,18h-2.1L8.12,6H10.23z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/c/Moopleanimation"
                                class="border-[2px] border-[#434343] rounded-full p-2 hover:bg-[#ffffff45]" aria-label="youtube">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                    viewBox="0 0 24 24">
                                    <path fill="white"
                                        d="M 12 4 C 12 4 5.7455469 3.9999687 4.1855469 4.4179688 C 3.3245469 4.6479688 2.6479687 5.3255469 2.4179688 6.1855469 C 1.9999687 7.7455469 2 12 2 12 C 2 12 1.9999687 16.254453 2.4179688 17.814453 C 2.6479687 18.675453 3.3255469 19.352031 4.1855469 19.582031 C 5.7455469 20.000031 12 20 12 20 C 12 20 18.254453 20.000031 19.814453 19.582031 C 20.674453 19.352031 21.352031 18.674453 21.582031 17.814453 C 22.000031 16.254453 22 12 22 12 C 22 12 22.000031 7.7455469 21.582031 6.1855469 C 21.352031 5.3255469 20.674453 4.6479688 19.814453 4.4179688 C 18.254453 3.9999687 12 4 12 4 z M 12 6 C 14.882 6 18.490875 6.1336094 19.296875 6.3496094 C 19.465875 6.3946094 19.604391 6.533125 19.650391 6.703125 C 19.891391 7.601125 20 10.342 20 12 C 20 13.658 19.891391 16.397875 19.650391 17.296875 C 19.605391 17.465875 19.466875 17.604391 19.296875 17.650391 C 18.491875 17.866391 14.882 18 12 18 C 9.119 18 5.510125 17.866391 4.703125 17.650391 C 4.534125 17.605391 4.3956094 17.466875 4.3496094 17.296875 C 4.1086094 16.398875 4 13.658 4 12 C 4 10.342 4.1086094 7.6011719 4.3496094 6.7011719 C 4.3946094 6.5331719 4.533125 6.3946094 4.703125 6.3496094 C 5.508125 6.1336094 9.118 6 12 6 z M 10 8.5351562 L 10 15.464844 L 16 12 L 10 8.5351562 z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <img src="./assets/img/brand-logo/great-place.png" alt="" width="80%" height="100%">
                        </div>
                    </div>
                    <div class="flex gap-3 items-center pt-5">
                        <img src="./assets/img/brand-logo/nfdc.jpg" alt="" width="95px" height="100%">
                        <div>
                            <p class="text-white text-sm">Affiliated Training Partner of</p>
                            <p class="text-white text-sm">National Film Development<br /> Corporation of India</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-[20%] px-2">
                <p class="text-[25px] text-[#FFF] font-semibold">About us</p>
                <ul class="pt-3">
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF] " href="about#our-organizaton">Our Organization</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="about#our-vision">Our Vision</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="about#our-mission">Our Mission</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="about#our-director">Our Directors</a>
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-[25%] px-2">
                <p class="text-[25px] text-[#FFF] font-semibold">Courses</p>
                <ul class="pt-3">
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF] " href="courses#animation-courses">Animation Courses</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="courses#vfx-courses">VFX Courses</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="courses#graphics-design-courses">Graphics Design Courses</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="courses#web-design-course">Web Design Courses</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="courses#digital-marketing-course">Digital Marketing Course</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="game-development-course">3D Gaming</a>
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-[25%] px-2">
                <p class="text-[25px] text-[#FFF] font-semibold">Quick Links</p>
                <ul class="pt-3">
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF] " href="contact">Contact us</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="centres">Our Centers</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="career">Career</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="partner-with-moople">Own Our Franchise</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="college-partnership-program">College Partnership Program</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="https://www.moople.in/blog/">Blog</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="privacy-policy">Privacy Policy</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="news-media">News & Media</a>
                    </li>
                    <li class="mb-2 hover:translate-x-[10px] transition duration-200 ease">
                        <a class="text-[#FFF]" href="under-construction">Moodism - Our Magazine</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="opacity-35">
        <div class="text-white text-center py-6">
            <span>Copyright &copy;
                <script>document.write(new Date().getFullYear())</script> Moople Academy Pvt. Ltd.
            </span>
        </div>
    </div>
</Footer>

<section class="fixed right-4 top-[35%] z-[99] bg-[#0000004f] rounded-lg hidden sm:block">
    <a href="https://www.facebook.com/moople.in" class="p-2 hover:bg-[#ffffff82] block w-full rounded-[5px]" aria-label="facebook">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24">
            <path fill="white"
                d="M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2 C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z">
            </path>
        </svg>
    </a>
    <a href="https://www.instagram.com/moople.in/" class="p-2 hover:bg-[#ffffff82] block w-full rounded-[5px]" aria-label="instagram">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 32 32">
            <path fill="white"
                d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z">
            </path>
        </svg>
    </a>
    <a href="https://www.youtube.com/c/Moopleanimation" class="p-2 hover:bg-[#ffffff82] block w-full rounded-[5px]" aria-label="youtube">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 24 24">
            <path fill="white"
                d="M 12 4 C 12 4 5.7455469 3.9999687 4.1855469 4.4179688 C 3.3245469 4.6479688 2.6479687 5.3255469 2.4179688 6.1855469 C 1.9999687 7.7455469 2 12 2 12 C 2 12 1.9999687 16.254453 2.4179688 17.814453 C 2.6479687 18.675453 3.3255469 19.352031 4.1855469 19.582031 C 5.7455469 20.000031 12 20 12 20 C 12 20 18.254453 20.000031 19.814453 19.582031 C 20.674453 19.352031 21.352031 18.674453 21.582031 17.814453 C 22.000031 16.254453 22 12 22 12 C 22 12 22.000031 7.7455469 21.582031 6.1855469 C 21.352031 5.3255469 20.674453 4.6479688 19.814453 4.4179688 C 18.254453 3.9999687 12 4 12 4 z M 12 6 C 14.882 6 18.490875 6.1336094 19.296875 6.3496094 C 19.465875 6.3946094 19.604391 6.533125 19.650391 6.703125 C 19.891391 7.601125 20 10.342 20 12 C 20 13.658 19.891391 16.397875 19.650391 17.296875 C 19.605391 17.465875 19.466875 17.604391 19.296875 17.650391 C 18.491875 17.866391 14.882 18 12 18 C 9.119 18 5.510125 17.866391 4.703125 17.650391 C 4.534125 17.605391 4.3956094 17.466875 4.3496094 17.296875 C 4.1086094 16.398875 4 13.658 4 12 C 4 10.342 4.1086094 7.6011719 4.3496094 6.7011719 C 4.3946094 6.5331719 4.533125 6.3946094 4.703125 6.3496094 C 5.508125 6.1336094 9.118 6 12 6 z M 10 8.5351562 L 10 15.464844 L 16 12 L 10 8.5351562 z">
            </path>
        </svg>
    </a>
    <a href="https://in.linkedin.com/company/moople"
        class="p-2 hover:bg-[#ffffff82] block w-full rounded-[5px]">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 30 30" aria-label="linkedin">
            <path fill="white"
                d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z">
            </path>
        </svg>
    </a>
</section>
<section class="fixed right-2 md:right-4 top-[65%] z-[99]">
    <div class="relative ces">
        <button id="menuButton1" class="p-2 md:p-3 mb-4 bg-gradient-to-b from-[#25d366] to-[#25d366] block w-full rounded-lg" aria-label="menu-button1">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 24 24">
                <path fill="white"
                    d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z">
                </path>
            </svg>
        </button>

        <ul id="menu1"
            class="absolute -left-[180px] top-[-250px] z-10 min-w-[180px] h-[300px] overflow-y-scroll rounded-lg border border-slate-200 bg-[#111111] shadow-lg shadow-sm focus:outline-none hidden">
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Baguiati</a> 
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=919883360890" target="_blank">Bardhaman</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=919830868989" target="_blank">Barrackpore</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Barasat</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Berhampore</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Chandannagar</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Degree Course</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=919830868989" target="_blank">Dunlop</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Chowringhee</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Jodhpur park</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Kudghat</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918768010707" target="_blank">Mecheda</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918768010707" target="_blank">Midnapore</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">New Alipore</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=919911189221" target="_blank">Nirman Vihar Delhi</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Sealdah</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Serampore</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Siliguri</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=919738949494" target="_blank">Shyambazar</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="https://api.whatsapp.com/send?phone=918336901401" target="_blank">Sonarpur</a>
            </li>
            

        </ul>

    </div>
    <div class="relative ces">
        <button id="menuButton2" class="p-2 md:p-3 mb-4 bg-gradient-to-b from-[#F08A31] to-[#B5341D] block w-full rounded-lg" aria-label="menu-button2">
            <img src="./assets/icons/phone-solid.svg" alt="" width="22" height="22">
        </button>

        <ul id="menu2"
            class="absolute -left-[180px] top-[-255px] z-10 min-w-[180px] h-[300px] overflow-y-scroll rounded-lg border border-slate-500 bg-[#111111] shadow-lg shadow-sm focus:outline-none hidden">
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Baguiati</a>    
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919883360890">Bardhaman</a>  
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919830868989">Barrackpore</a> 
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Barasat</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Berhampore</a> 
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Chandannagar</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Degree Course</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+916289550174">Dunlop</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Jodhpur park</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Kudghat</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+918768010707">Mecheda</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+918768010707">Midnapore</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">New Alipore</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919911189221">Nirman Vihar Delhi</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Sealdah</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Serampore</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Siliguri</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919738949494">Shyambazar</a>
            </li>
            <li
                class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md px-3 my-1 transition-all hover:bg-[#262626]">
                <a class="py-2 w-full block text-[16px] text-white" href="tel:+919831808080">Sonarpur</a>
            </li>
            
        </ul>

    </div>
</section>


<script src="assets/js/custom.js"></script>
</body>

</html>
