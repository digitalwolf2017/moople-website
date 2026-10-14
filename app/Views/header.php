<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_title; ?></title>
    <!--<meta name="keywords" content="<?php echo $meta_keyword;?>">-->
    <meta name="description" content="<?php echo $meta_description;?>">
    <?php if (isset($dynamic_robots_meta) && trim((string) $dynamic_robots_meta) !== '') { ?>
    <meta name="robots" content="<?php echo htmlspecialchars((string) $dynamic_robots_meta, ENT_QUOTES, 'UTF-8'); ?>">
    <?php } ?>
    <link rel="canonical" href="https://www.moople.in<?php echo ((isset($page_uri) && $page_uri!='') ? '/'.$page_uri : ''); ?>" />
    <?php
    if (isset($dynamic_schema_json) && trim((string) $dynamic_schema_json) !== '') {
        $dynamicSchemaJson = trim((string) $dynamic_schema_json);
        $dynamicSchemaJson = preg_replace('#</?script[^>]*>#i', '', $dynamicSchemaJson);
    ?>
    <script type="application/ld+json">
<?php echo $dynamicSchemaJson; ?>
    </script>
    <?php } ?>
    
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
fbq('init', '2897931123736863');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2897931123736863&ev=PageView&noscript=1"
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
                                                            href="bsc-multimedia-web-development">BSC in Multimedia, Design and Web Development</a> 
                                                        </li>
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
                                                <li class="border-b border-[#545454]">
                                                    <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                        href="game-development-course">3D Gaming</a>
                                                </li>
                                                <li class="border-b border-[#545454]">
                                                    <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                        href="bsc-in-cyber-security">Cyber Security Course</a>
                                                </li>
                                                <li>
                                                    <a class="text-white text-[18px] py-2 px-3 block w-full hover:bg-[#545454]"
                                                        href="bca-course">BCA</a>
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