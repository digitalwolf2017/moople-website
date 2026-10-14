<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_title; ?></title>
    <!--<meta name="keywords" content="<?php echo $meta_keyword;?>">-->
    <meta name="description" content="<?php echo $meta_description;?>">
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://www.moople.in<?php echo ((isset($page_uri) && $page_uri!='') ? '/'.$page_uri : ''); ?>" />
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P8RK5FJX');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1805436537041640');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1805436537041640&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1780185312896859');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1780185312896859&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    
    
    
    <script type="text/javascript"> adroll_adv_id = "77UOD4MFQNGY3KYEW7KGUY"; adroll_pix_id = "GKEZPTTKEVGI7FO5HBQYM7"; adroll_version = "2.0";  (function(w, d, e, o, a) { w.__adroll_loaded = true; w.adroll = w.adroll || []; w.adroll.f = [ 'setProperties', 'identify', 'track', 'identify_email', 'get_cookie' ]; var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id + "/roundtrip.js"; for (a = 0; a < w.adroll.f.length; a++) { w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) { return function() { w.adroll.push([ n, arguments ]) } })(w.adroll.f[a]) }  e = d.createElement('script'); o = d.getElementsByTagName('script')[0]; e.async = 1; e.src = roundtripUrl; o.parentNode.insertBefore(e, o); })(window, document); adroll.track("pageView"); </script>
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
                            <img src="./assets/img/brand-logo/moople-brand-logo.webp" alt="moople brand logo" width="120"
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
                                <img class="mb-5" src="assets/img/brand-logo/moople-brand-logo.webp" alt="" width="120px"
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


<main>
     <section class="bg-[url('assets/img/banner/banner-landing.webp')] bg-cover bg-[98rem_0rem] md:bg-center h-[780px] lg:h-[700px] lg:flex lg:justify-end lg:flex-col">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap lg:pt-0 pt-[50px]">
                <div class="w-[100%] lg:w-[60%] px-2 flex justify-end flex-col"> 
                    <ul class="pt-[120px] pb-6 lg:pb-[100px] list-disc ps-6">
                        <li class="text-white text-[20px] lg:text-[24px] mb-2">Best Animation Course</li>
                        <li class="text-white text-[20px] lg:text-[24px] mb-2">Best VFX Course</li>
                        <li class="text-white text-[20px] lg:text-[24px] mb-2">Best Graphic Course</li>
                        <li class="text-white text-[20px] lg:text-[24px] mb-2">Best Web design Course</li>
                        <li class="text-white text-[20px] lg:text-[24px] mb-2">Best Digital Marketing Course</li>
                        <li class="text-[25px] lg:text-[50px] text-[#F08A31] font-semibold leading-[30px] lg:leading-[50px] list-none">Look No Further!!!</li>
                    </ul>
                </div>
                <div class="w-[100%] lg:w-[40%] px-2 flex justify-end flex-col lg:-mb-[30px]">
                    <?php include('components/centres-form') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-[210px] lg:pt-6 lg:py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap gap-y-5">
                <div class="w-full lg:w-[50%] px-3 ">
                    <div class="p-4 relative">
                        <img class="rounded-lg" src="./assets/img/centres/centres-about-course.webp" alt="" width="100%"
                            height="100%">
                        <div class="absolute z-2 -bottom-0 right-0">
                            <button data-modal-target="certoficateModal"
                                class="bg-gradient-to-b from-[#F08A31] to-[#B5341D] text-center px-6 py-2 rounded-lg font-semibold text-white leading-[17px]">
                                <img class="block mx-auto" src="./assets/icons/prospectus.png" alt="" width="50"
                                    height="100%">
                                Download <br />Prospectus
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-[50%] px-3 ">
                    <div class="py-6">
                        <div class="">
                            <h1 class="text-white text-[20px] lg:text-[35px] font-semibold ">Welcome to Moople Kudghat</h1>
                            <p class="text-[#fff] text-[18px]">Discover a world of visual communication with our extensive course offerings</p>
                        </div>
                        <div class="text-white mt-5">
                            <div>
                                <p class="text-[#bcbcbc] text-[16px] mb-3">
                                    Moople is the pioneer in redefining the concept of multimedia education through its
                                    21+ centres across India and growing. We provide courses in 2D and 3D Animation,
                                    Graphics, Motion Graphics, Video Editing, UI/UX & Web Design, Visual Effects (VFX),
                                    and Game Art Design.
                                </p>

                                <p class="text-[#bcbcbc] text-[16px]">
                                    Our advanced infrastructure fosters creativity and innovation. Our production studio
                                    Hi-Tech Animation, helps create industry-relevant curriculum which ensures that
                                    students secure placements in top companies nationwide.
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-y-3 mt-5">
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p>Industry-seasoned Faculty</p>
                                </div>
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p>AI integrated educational framework</p>
                                </div>
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p>Production studio-developed Curriculum</p>
                                </div>
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p>Cutting-Edge Infrastructure</p>
                                </div>
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p>Dedicated Student Workstation</p>
                                </div>
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p>Strong Alumni Network</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <button data-modal-target="modal1" class="bg-[#F08A31] text-[#FFF] py-2 px-6 rounded">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('components/our-courses') ?>

    <?php include('components/why-moople') ?>

    <section class="bg-[#000] pt-10 pb-20">
        <div class="container mx-auto px-4 pb-6">
            <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Moople
                Framework</span>
            <h2 class="text-[#FFF] text-[26px] lg:text-[35px] font-semibold mt-3">Our Infrastructure</h2>
            <p class="text-[#FFF]">Baguiati offers a state-of-the-art lab equipped with advanced high-performance
                workstations, specialised classrooms, green screen facilities,<br /> and high-speed internet, fostering
                an immersive learning environment for students.</p>
        </div>
        <div id="infrastructure" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra1.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra2.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra3.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra4.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra5.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra6.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra7.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra8.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra9.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra10.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra11.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra12.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra13.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra14.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra15.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra16.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra17.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra18.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra19.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra20.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra21.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra22.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra23.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra24.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra25.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra26.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra27.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra28.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra29.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra30.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra31.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra32.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/infrastructure/infra33.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="bg-[#262626] pt-10 pb-20">
        <div class="container mx-auto px-4 pb-8">
            <p class="text-white text-[20px] lg:text-[35px]"><span class="text-[#F08A31]"></span>Fun @ <span
                    class="text-[#F08A31]">Moople</span></p>
            <p class="text-white pb-3">At Moople we believe that a happy workplace fuels creativity and
                productivity.<br />
                From team-building activities to celebrating festivals, we make sure work feels fun and rewarding!</p>
        </div>
        <div id="career" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun2.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun3.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun4.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun5.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun6.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun7.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun8.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun9.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun10.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/career/fun/fun11.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="bg-[#000] py-5 mb-[7rem] lg:mb-0">
        <div class="container mx-auto px-4">
            <div>
                <img class="max-w-full w-[700px] block m-auto" src="./assets/img/home/Awards.webp" alt="" width="100%"
                    height="100%">
            </div>
            <div class="-mt-4 lg:-mt-12">
                <div>
                     <p class="text-[14px] lg:text-[30px] font-[500] text-center text-white">Best <span
                            class="text-[#F08A31]">Institute of Placement in AVGC</span> - ASSOCHAM 2023</p>
                    <p class="text-[14px] lg:text-[30px] font-[500] text-center text-white">Excellent <span
                            class="text-[#F08A31]">Institute in Animation & Design</span> - ADORCOMM 2022</p>
                    <p class="text-[12px] lg:text-[28px] font-[500] text-center text-white">Best <span
                            class="text-[#F08A31]">Institute of Animation & Design</span> - ASSOCHAM 2021</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>