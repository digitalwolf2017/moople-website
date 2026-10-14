<?php include('header.php') ?>

<main id="reserve2" class="mt-[10rem] lg:mt-[8.3rem]">
        <section class="banner relative w-[95%] block ms-auto">
      <img class="block ms-auto rounded-s-xl" src="./assets/img/course/animation-banner.webp" alt="Animation Course" width="100%" height="100%">
      <div class="absolute inset-0 flex items-center justify-start md:ml-32 ml-4">
        <h2 class="text-white text-xl md:text-5xl font-bold drop-shadow-lg">
          Animation Course
        </h2>
      </div>
    </section>
    
    <section class="py-6">
        <div class="container mx-auto px-4 lg:px-20">
            <div class="flex flex-wrap gap-y-5">
                <div class="w-full lg:w-[40%] px-3 ">
                    <div class="p-4 relative">
                        <img class="rounded-lg" src="./assets/img/course/3d-animation/3danimation.webp" alt="" width="100%"
                            height="100%">
                        <div class="absolute z-2 -bottom-0 lg:right-0 right-[50px]">
                            <button data-modal-target="modal1"
                                class="bg-gradient-to-b from-[#F08A31] to-[#B5341D] text-center px-6 lg:px-12 py-3 lg:py-6 rounded-lg font-semibold text-white leading-[17px]">
                                <img class="md:block mx-auto hidden" src="./assets/icons/prospectus.png" alt="" width="50"
                                    height="100%">
                                Download <br class="hidden md:block"/>Prospectus
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-[60%] px-3 ">
                    <div class="py-6">
                        <div class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] py-2 max-w-full inline-block px-4 rounded-lg">
                            <h1 class="text-white lg:text-center text-[20px] lg:text-[35px] font-semibold ">Animation Course in Guwahati</h1>
                        </div>
                        <div class="text-white mt-5">
                            <div class="flex flex-wrap gap-y-3">
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p class="text-[18px]">Industry-Seasoned Faculty</p>
                                </div>
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p class="text-[18px]">AI Integrated Educational Curriculum</p>
                                </div>
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p class="text-[18px]">Cutting Edge Infrastructure</p>
                                </div>
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p class="text-[18px]">Guaranteed Placement Guidance</p>
                                </div>
                            </div>
                            <div class="py-5">
                                <p class="text-[#BCBCBC] text-[16px]">
                                Kickstart your creative journey with <strong>Moople Animation Institute</strong>, the leading animation training center in Guwahati. We offer a wide range of industry-focused programs, including <strong>2D animation courses, 3D animation courses</strong>, and a <strong>BSc in Animation</strong> — designed to equip you with both artistic skills and technical expertise.
                                </p>
                            </div>
                            <div>
                                <p class="text-[#BCBCBC] text-[16px]">
                                Our curriculum blends creativity with technology, ensuring students gain hands-on experience in character design, visual effects, and animation software. Whether you aspire to craft captivating 2D animations or build realistic 3D environments, our expert faculty and state-of-the-art infrastructure will guide you every step of the way.
                                </p>
                            </div>
                            <div class="py-3">
                                <p class="text-[#BCBCBC] text-[16px]">
                                The <strong>BSc in Animation</strong> program not only enhances your creative abilities but also opens doors to exciting careers in animation studios, gaming companies, and media houses.
                                </p>
                            </div>
                            <div>
                                <p class="text-[#BCBCBC] text-[16px]">
                                Take the first step towards your dream career. Join <strong>Moople Animation Institute</strong> in Guwahati today and bring your imagination to life!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-[#1C1C1C] pb-0 pt-12 lg:pb-12 px-3">
    <div class="container mx-auto px-4 bg-gradient-to-b from-[#21346d] to-[#11193e] pt-8 pb-5 rounded border-2 border-[#2b4490]">
        <div>
            <div class="pb-3">
                <span class="text-white font-semibold">Admissions Open 2025</span>
            </div>
        </div>
        <div class="lg:py-3">
            <form id="frm_admission_open_animation1" name="frm_admission_open" method="post" enctype="multipart/form-data" action="<?php echo base_url('leads.php');?>">
                <div class="flex flex-wrap gap-y-3">
                    <div class="w-full lg:w-[20%] px-2 relative">
                    <input
                        placeholder="Full Name"
                        class="peer pt-7 pb-3 w-full px-3 text-sm tracking-[1px] text-black bg-[#c4cdff] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]"
                        required
                        id="name"
                        name="name"
                        type="text"
                        spellcheck="false"
                    />
                    <label
                        class="absolute left-5 top-2 text-black text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-black peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-black peer-focus:text-sm z-[1]"
                        for="name"
                        >Full Name</label
                    >
                    </div>
                    <div class="w-full lg:w-[20%] px-2 relative">
                        <input
                            class="peer pt-7 pb-3 w-full px-3 text-sm tracking-[1px] text-black bg-[#c4cdff] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]"
                            type="text" 
                            placeholder="Phone" 
                            name="phone" 
                            required
                            id="phone"
                            pattern="[1-9]{1}[0-9]{9}" 
                            maxlength="10"
                            spellcheck="false"
                        >
                            <label
                                class="absolute left-5 top-2 text-black text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-black peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-black peer-focus:text-sm z-[1]"
                                for="phone"
                                >Phone</label
                            >
                    </div>
                    <div class="w-full lg:w-[20%] px-2 relative">
                        <select id="qualification" name="educational_qualification" autocomplete="country-name" placeholder="Full Name" aria-label="qualification"
                            class="peer py-[1.125rem] w-full px-3 text-sm tracking-[1px] text-black bg-[#c4cdff] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]" required>
                            <option value="">Qualification</option>
                            <option value="10th">10th</option>
                            <option value="12th">12th</option>
                            <option value="graduation">Graduation</option>
                            <option value="post graduation">Post Graduation</option>    
                        </select>
                    </div>
                    <div class="w-full lg:w-[20%] px-2 relative">
                        <select id="course" name="course" autocomplete="country-name" aria-label="course"
                            class="peer py-[1.125rem] w-full px-3 text-sm tracking-[1px] text-black bg-[#c4cdff] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]" required>

                            <?php
                                if(isset($courses) && count($courses)>0){
                                    foreach($courses as $ck=>$cv){
                            ?>
                            <option value="<?php echo $cv;?>"><?php echo $cv;?></option>
                            <?php }}?>
                            
                        </select>
                    </div>

                    <div class="w-full lg:w-[20%] px-2 relative">
                        <select id="location" name="location" autocomplete="country-name" aria-label="city"
                            class="peer py-[1.125rem] w-full px-3 text-sm tracking-[1px] text-black bg-[#c4cdff] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]" required>
                            <option value="">Select Branch</option>
                            <option value="Guwahati">Guwahati</option>
                        </select>
                    </div>
                    <div class="w-full lg:w-[20%] px-2">
                        <input type="hidden" name="utm_source" value="<?php echo (isset($_GET['utm_source']) && $_GET['utm_source']!='') ? $_GET['utm_source'] : '';?>" />
                        <input type="hidden" name="utm_medium" value="<?php echo (isset($_GET['utm_medium']) && $_GET['utm_medium']!='') ? $_GET['utm_medium'] : '';?>" />
                        <input type="hidden" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign']) && $_GET['utm_campaign']!='') ? $_GET['utm_campaign'] : '';?>" />
                        <input type="hidden" name="email" value="NA">
                        <input type="hidden" name="redirect_from" value="<?php echo $page_name;?>">

                    </div>
                    <div class="w-full px-2 flex justify-center scale-[.9] pb-3">
                        <div class="g-recaptcha" data-sitekey="6Lf9ePspAAAAALVVScUj3pDoYvTqyvwPF9nX2Acz" data-callback="verifyCaptcha"></div>
                        <div id="captcha-error3214animation1" class="text-center fw-bold mt-3" style="color: red;"></div>
                    </div>
                    <button
                        class="w-[250px] px-5 py-2 bg-gradient-to-r from-[#F08A31] to-[#B5341D] rounded-lg text-white hover:bg-gradient-to-r hover:from-[#B5341D] hover:to-[#F08A31] transition duration-500 ease flex justify-center gap-x-2 mx-auto"
                        type="submit">Submit <img src="./assets/icons/send.png" alt="" width="18"
                            height="18">
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

    <?php include('components/scrollButton'); ?>

    <section class="pt-12 pb-12 bg-[#1E1E1E]" id="course-details">
        <div class="container mx-auto px-4">
                <div>
                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Our Courses</span>
                    <h2 class="text-[#FFF] text-[25px] lg:text-[35px] font-semibold mt-3">Course Offerings</h2>
                    <p class="text-[#FFF]">Find out what the next generation of digital artistry will hold with our programs.</p>
                </div>
                <div class="flex flex-wrap gap-y-5">
                        <div class="w-[100%] lg:w-[25%] lg:p-3 p-3">
                            <div class="relative">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="bsc-in-animation">
                                        <img class="bg-[#262626] w-full h-auto transition duration-500 hover:scale-125" loading="lazy" src="./assets/img/course/animation-academy.webp" alt="" width="409" height="596">
                                    </a>
                                </div>
                                <div class="absolute top-4 right-4">
                                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Degree Course</span>
                                </div>
                                <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000] rounded-b-lg">
                                    <a href="bsc-in-animation" class="text-[#F08A31] text-[20px] leading-[25px] font-semibold">BSc in Animation Film Making </a>
                                    <p class="text-[#FFF]">4 years BSC degree course awarded by 
                                      MAKAUT University.</p>
                                      <a class="text-[#fff] border-2 border-[transparent] hover:border-2 hover:border-[#fff] px-4 py-1 float-right transition duration-500" href="bsc-in-animation">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-[100%] lg:w-[25%] lg:p-3 p-3">
                            <div class="relative">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="animation-course">
                                        <img class="bg-[#262626] w-full h-auto transition duration-500 hover:scale-125" loading="lazy" src="./assets/img/course/animation-3d-academy.webp" alt="" width="409" height="596">
                                    </a>
                                </div>
                                <div class="absolute top-4 right-4">
                                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>
                                </div>
                                <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000] rounded-b-lg">
                                    <a href="animation-course" class="text-[#F08A31] text-[20px] leading-[25px] font-semibold">Advanced 3D Animation & AI</a>
                                    <p class="text-[#FFF] mb-3">Learn to create dynamic 3D animations, using industry-standard software.</p>
                                    <a class="text-[#fff] border-2 border-[transparent] hover:border-2 hover:border-[#fff] px-4 py-1 float-right transition duration-500" href="animation-course">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-[100%] lg:w-[25%] lg:p-3 p-3">
                            <div class="relative">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="2d-animation-course">
                                        <img class="bg-[#262626] w-full h-auto transition duration-500 hover:scale-125" loading="lazy" src="./assets/img/course/animation-2d-academy.webp" alt="" width="409" height="596">
                                    </a>
                                </div>
                                <div class="absolute top-4 right-4">
                                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>
                                </div>
                                <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000] rounded-b-lg">
                                    <a href="2d-animation-course" class="text-[#F08A31] text-[20px] leading-[25px] font-semibold">2D Animation & AI</a>
                                    <p class="text-[#FFF] mb-3">Master the art of 2D animation, using traditional techniques and digital tools to bring drawings to life.</p>
                                    <a class="text-[#fff] border-2 border-[transparent] hover:border-2 hover:border-[#fff] px-4 py-1 float-right transition duration-500" href="2d-animation-course">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-[100%] lg:w-[25%] lg:p-3 p-3">
                            <div class="relative">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="3d-modelling-course">
                                        <img class="bg-[#262626] w-full h-auto transition duration-500 hover:scale-125" loading="lazy" src="./assets/img/course/3d-modelling-&-ai .webp" alt="" width="409" height="596">
                                    </a>
                                </div>
                                <div class="absolute top-4 right-4">
                                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>
                                </div>
                                <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000] rounded-b-lg">
                                    <a href="3d-modelling-course" class="text-[#F08A31] text-[20px] leading-[25px] font-semibold">3d Modelling and AI </a>
                                    <p class="text-[#FFF] mb-3">Duration : 4 Months</p>
                                    <a class="text-[#fff] border-2 border-[transparent] hover:border-2 hover:border-[#fff] px-4 py-1 float-right transition duration-500" href="3d-modelling-course">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </section>

    <section class="py-6 lg:py-12" id="payment">
        <div class="container mx-auto px-4">
            <div class="pb-12">
                <div class="py-5">
                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate
                        Course</span>
                </div>
                <div>
                    <h2 class="text-white text-[25px] lg:text-[35px] font-semibold">Payment options</h2>
                    <p class="text-white">
                        Through Moople, you can find easy ways to pay for your <strong>best animation courses in Guwahati</strong>.<br> Prefer to spend as you learn? We've got options! Design your dream creative future without worrying about expenses!
                    </p>
                </div>
            </div>
            <div>
                <div class="flex flex-wrap gap-y-5">
                    <div class="w-[50%] lg:w-[25%] p-2 lg:flex justify-between flex-col">
                        <div>
                            <img class="block mx-auto" src="./assets/icons/percentage.png" alt="" width="60" height="60">
                        </div>
                        <div>
                            <p class="text-white text-center text-[12px] lg:text-[16px]">Full upfront Payment Plan<br /> (10% Discount)</p>
                        </div>
                    </div>
                    <div class="w-[50%] lg:w-[25%] p-2 flex justify-between flex-col">
                        <div>
                            <img class="block mx-auto" src="./assets/icons/arrow-down.png" alt="" width="60" height="60">
                        </div>
                        <div>
                            <p class="text-white text-center pb-2 text-[12px] lg:text-[16px]">First 3 months Installment
                                <br />Plan (5% Discount)
                            </p>
                        </div>
                    </div>
                    <div class="w-[50%] lg:w-[25%] p-2 flex justify-between flex-col">
                        <div>
                            <img class="block mx-auto" src="./assets/icons/Frame.png" alt="" width="60" height="60">
                        </div>
                        <div>
                            <p class="text-white text-center pb-2 text-[12px] lg:text-[16px]">Pay as you learn Plan
                                <br />(No Discount)
                            </p>
                        </div>
                    </div>
                    <div class="w-[50%] lg:w-[25%] p-2 flex justify-between flex-col">
                        <div class="pb-[25px] pt-3">
                            <img class="block mx-auto" src="./assets/icons/neev.png" alt="" width="150" height="100%">
                        </div>
                        <div>
                            <p class="text-white text-center pb-2 text-[12px] lg:text-[16px]">Easy Financing with
                                <br />Neev & NuCash
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-12">
                    <p class="text-white text-[15px] lg:text-[20px]"><span
                            class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 rounded">Note</span>
                        : We accept Visa / Master Card / Rupay / UPI / Bank Transfer / Cheque / Demand Draft / Cash
                        (upto 50k)</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-6" id="faculties">
        <div class="container mx-auto px-4">
            <div class="pb-12">
                <div class="py-5">
                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Industry
                        Experts</span>
                </div>
                <div>
                    <h2 class="text-white text-[20px] lg:text-[35px] font-semibold">Industry Experience Faculties</h2>
                    <p class="text-white">
                    Animation provides endless opportunities for gains in different sectors.<br> Learn from our experienced faculty who have worked at world-class studios. Get expert guidance on the best <strong>animation training course in Guwahati</strong>. 
                    </p>
                </div>
            </div>
            <div>
                <div id="faculties-slide" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide relative">
                                <div class="relative">
                                    <div class="relative before:content-[''] before:bg-gradient-to-t before:from-[#000000] before:to-[#00000000] before:w-full before:h-full before:absolute before:top-0 before:left-0 before:opacity-100">
                                        <img class="rounded-lg " src="./assets/img/faculties/animation/satyajit-samanta.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                   <div class="absolute bottom-0 left-0 z-2 w-full p-4">
                                       <h3 class="text-white text-[25px] font-medium leading-tight">Satyajit Samanta</h3>
                                       <p class="text-[#F08A31]">3D Animation</p>
                                       <p class="text-white">Experience - 7 Years</p>
                                   </div>
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div class="relative">
                                    <div class="relative before:content-[''] before:bg-gradient-to-t before:from-[#000000] before:to-[#00000000] before:w-full before:h-full before:absolute before:top-0 before:left-0 before:opacity-100">
                                        <img class="rounded-lg " src="./assets/img/faculties/animation/sourav-burai.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                   <div class="absolute bottom-0 left-0 z-2 w-full p-4">
                                       <h3 class="text-white text-[25px] font-medium leading-tight">Sourav Burai</h3>
                                       <p class="text-[#F08A31]">3D Animation</p>
                                       <p class="text-white">Experience - 14 Years</p>
                                   </div>
                                </div>
                            </li>
                            <li class="splide__slide relative">
                               <div class="relative">
                                    <div class="relative before:content-[''] before:bg-gradient-to-t before:from-[#000000] before:to-[#00000000] before:w-full before:h-full before:absolute before:top-0 before:left-0 before:opacity-100">
                                        <img class="rounded-lg " src="./assets/img/faculties/animation/pavel-dutta.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                   <div class="absolute bottom-0 left-0 z-2 w-full p-4">
                                       <h3 class="text-white text-[25px] font-medium leading-tight">Pavel Dutta</h3>
                                       <p class="text-[#F08A31]">3D Animation</p>
                                       <p class="text-white">Experience - 9 Years</p>
                                   </div>
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div class="relative">
                                    <div class="relative before:content-[''] before:bg-gradient-to-t before:from-[#000000] before:to-[#00000000] before:w-full before:h-full before:absolute before:top-0 before:left-0 before:opacity-100">
                                        <img class="rounded-lg " src="./assets/img/faculties/animation/snehanshu-mukherjee.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                   <div class="absolute bottom-0 left-0 z-2 w-full p-4">
                                       <h3 class="text-white text-[25px] font-medium leading-tight">Snehanshu Mukherjee</h3>
                                       <p class="text-[#F08A31]">3D Animation</p>
                                       <p class="text-white">Experience - 20 Years</p>
                                   </div>
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div class="relative">
                                    <div class="relative before:content-[''] before:bg-gradient-to-t before:from-[#000000] before:to-[#00000000] before:w-full before:h-full before:absolute before:top-0 before:left-0 before:opacity-100">
                                        <img class="rounded-lg " src="./assets/img/faculties/animation/riya-karmakar.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                   <div class="absolute bottom-0 left-0 z-2 w-full p-4">
                                       <h3 class="text-white text-[25px] font-medium leading-tight">Riya Karmakar</h3>
                                       <p class="text-[#F08A31]">3D Animation</p>
                                       <p class="text-white">Experience - 9 Years</p>
                                   </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12" id="career">
        <div class="container mx-auto px-4">
            <div>
                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Future
                    Leaders</span>
                <h2 class="text-white text-[20px] lg:text-[35px] font-semibold mt-3">Career Opportunity</h2>
                <p class="text-[#FFF]">
                    3D animated features improve learning experiences in educational systems. The gaming industry relies on animation for engaging content.<br> Take advantage of the immense career opportunities from the top-ranking <strong>animation institute in Guwahati</strong> and get these interesting jobs. 
                </p>
            </div>
            <div class="pt-12">
                <div id="future-leaders" class="splide one" aria-label="Splide Basic HTML Example">
                    <div class="splide__track pb-6">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class="" src="./assets/img/course/3d-animation/career-opportunity/film.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Film and Television</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                3D Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Character Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Visual Effects (VFX) Artist
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Technical Director
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Animation Director
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/video-games.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Video Games</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                Game Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Character Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Environment Artist
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                3D Modeler
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Animation Designer
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/real-estate-industry.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Architecture and Real Estate</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                Architectural Visualizer
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                3D Modeler
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Visualization Artist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/product.webp" alt=""
                                            width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Product Design and Manufacturing</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                3D Product Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Industrial Designer
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Visualization Specialist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/healthcare.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Healthcare and Medical</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                Medical Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Biomedical Visualizer
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                3D Modeler
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/engineering.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Engineering and Manufacturing</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                Industrial Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Engineering Visualizer
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Manufacturing Process Animator
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/advertising-industry.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Marketing and Advertising</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                3D Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Visual Content Creator
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/e-learning.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Education and E-learning</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                E-Learning Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Educational Content Creator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Multimedia Developer
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/automotive.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Automotive</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                Mechanical Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Automotive Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Vehicle Dynamics Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                3D Vehicle Modeler and Animator
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/fashion.webp" alt=""
                                            width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Fashion</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                3D Fashion Designer
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Virtual Fashion Show Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Textile Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Virtual Stylist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/science-research.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Science and Research</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                Scientific Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Astrophysics Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Chemical Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Forensic Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Geoscience Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Scientific Visualization Specialist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/qr-vr.webp" alt=""
                                            width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Virtual Reality (VR) and Augmented Reality (AR)</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                VR/AR Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                3D Artist
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Immersive Media Specialist
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <div>
                                        <img class=""
                                            src="./assets/img/course/3d-animation/career-opportunity/simulation-training.webp"
                                            alt="" width="100%" height="100%">
                                    </div>
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button
                                            class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span>Simulation and Training</span>
                                            <span class="dropdown-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" class="w-4 h-4">
                                                    <path
                                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <li class="mb-2 text-[#FFF]">
                                                Simulation Animator
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                Training Content Developer
                                            </li>
                                            <li class="mb-2 text-[#FFF]">
                                                3D Simulation Specialist
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
    </section>

    <section class="py-12 bg-[#1C1C1C]" id="moopleAchiver">
        <div class="container mx-auto px-4">
            <div>
                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Moople
                    Achievers</span>
                <h2 class="text-white text-[20px] lg:text-[35px] font-semibold mt-3">Building Careers Through Strategic Placement</h2>
                <p class="text-[#FFF]">
                    We have designed an <strong>animation course in Guwahati</strong> for students where you can get industry exposure.<br> You will also gain immense benefits from Guest lectures and workshops from directors of animation.
                </p>
            </div>
            <div class="pt-8">
                <div id="placement" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/shlok-das.webp" alt="" width="100%"
                                        height="100%">
                                   
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/swarnali-ghorui.webp" alt="" width="100%"
                                        height="100%">
                                  
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/shivangi-das.webp" alt="" width="100%"
                                        height="100%">
                                   
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/sandipan-karmakar.webp" alt=""
                                        width="100%" height="100%">
                                  
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/pritam-koley.webp" alt="" width="100%"
                                        height="100%">
                                    
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/tithi-paul.webp" alt="" width="100%"
                                        height="100%">
                                  
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/akash-deb.webp" alt="" width="100%"
                                        height="100%">
                                    
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/abhipsha-mondal.webp" alt="" width="100%"
                                        height="100%">
                                   
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/niladri-dasgupta.webp" alt="" width="100%"
                                        height="100%">
                                   
                                </div>
                            </li>
                            <li class="splide__slide relative">
                                <div>
                                    <img class="rounded-t-lg" src="./assets/img/placement/animation/ananya-kundu.webp" alt="" width="100%"
                                        height="100%">
                                    <!-- <div class="bg-[#171717] rounded-b-lg p-3">
                                        <p class="text-[#F08A31] text-[23px] font-semibold">Ananya Kundu</p>
                                        <p class="text-[#FFFFFF]">Trainee Production Artist</p>
                                        <p class="text-[#626262]">Company - <span class="text-[#B5341D]">Hi-Tech
                                                Animation Studio</span>
                                        </p>
                                    </div> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12" id="recruiters">
        <div class="container mx-auto px-4 lg:ps-20">
            <div class="pb-[2rem]">
                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Our
                    Recruiters</span>
                <h2 class="text-[#FFF] text-[20px] lg:text-[35px] font-semibold mt-3">Finest Companies Recruit From Us</h2>
                <p class="text-[#FFF]">Learn about the future of digital artistry at Moople, Guwahati's leading institute in animation.<br class="hidden md:block"> The leading industry players like Red Chillies and VFXwaala benefitted from our students.</p>
            </div>
        </div>
        <div class="pt-8 md:ms-[20px] xl:ms-[50px]">
            <div id="brands" class="splide brand" aria-label="Splide Basic HTML Example">
                <div class="splide__track pb-6">
                    <div class="splide__list">
                        <div class="splide__slide">
                            <img class="p-3 grayscale hover:grayscale-0 rounded-[1.5rem] transition-all duration-500 ease"
                                src="./assets/img/brands/123homepaints.webp" alt="" width="90%" height="100%">
                        </div>
                        <div class="splide__slide">
                            <img class="p-3 grayscale hover:grayscale-0 rounded-[1.5rem] transition-all duration-500 ease"
                                src="./assets/img/brands/colorbar.webp" alt="" width="90%" height="100%">
                        </div>
                        <div class="splide__slide">
                            <img class="p-3 grayscale hover:grayscale-0 rounded-[1.5rem] transition-all duration-500 ease"
                                src="./assets/img/brands/colorsbangla.webp" alt="" width="90%" height="100%">
                        </div>
                        <div class="splide__slide">
                            <img class="p-3 grayscale hover:grayscale-0 rounded-[1.5rem] transition-all duration-500 ease"
                                src="./assets/img/brands/cosmos.webp" alt="" width="90%" height="100%">
                        </div>
                        <div class="splide__slide">
                            <img class="p-3 grayscale hover:grayscale-0 rounded-[1.5rem] transition-all duration-500 ease"
                                src="./assets/img/brands/editfx.webp" alt="" width="90%" height="100%">
                        </div>
                        <div class="splide__slide">
                            <img class="p-3 grayscale hover:grayscale-0 rounded-[1.5rem] transition-all duration-500 ease"
                                src="./assets/img/brands/gener8.webp" alt="" width="90%" height="100%">
                        </div>
                        <div class="splide__slide">
                            <img class="p-3 grayscale hover:grayscale-0 rounded-[1.5rem] transition-all duration-500 ease"
                                src="./assets/img/brands/globsyn.webp" alt="" width="90%" height="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="bg-[#000] py-5 relative z-[20] lg:pt-[90px] lg:pb-[60px] overflow-hidden" id="testimonial">
    <div class="container ms-auto px-4 lg:px-0">
        <div
            class="flex flex-wrap gap-y-[4rem] before:content-[''] before:w-[900px] before:h-full before:absolute before:left-0 before:top-0 before:bg-[#262626] before:z-[-1]">
            <div class="w-[100%] lg:w-[30%] px-2">
                <div class="text-white">
                    <span class="text-[20px]">Our Students</span>
                    <h2 class="text-[20px] lg:text-[40px] leading-[30px] lg:leading-[50px] font-semibold mb-0 py-3">
                        Our Greatest Brand Ambassadors</h2>
                    <p class="mb-0">But wait—we didn't say it all! Read what some of our students have to say regarding their studies at Moople.</p>
                </div>
            </div>
            <div class="w-[100%] lg:w-[70%] px-2 flex justify-center flex-col">
                <div id="testimonials" class="splide testimonials" aria-label="Splide Basic HTML Example">
                    <div class="splide__track pb-6">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <video class="cursor-pointer" controls poster="./assets/videos/debraj-thumbnail.jpg"
                                    width="100%">
                                    <source src="./assets/videos/Debraj-testimonials.mp4" type="video/webm">
                                </video>
                            </div>
                            <div class="splide__slide">
                                <video class="cursor-pointer" controls
                                    poster="./assets/videos/ranjita-thumbnail.jpg" width="100%">
                                    <source src="./assets/videos/Ranjita-testimonials.mp4" type="video/webm">
                                </video>
                            </div>
                            <div class="splide__slide">
                                <video class="cursor-pointer" controls poster="./assets/videos/safan-thumbnail.jpg"
                                    width="100%">
                                    <source src="./assets/videos/Safan-testimonials.mp4" type="video/webm">
                                </video>
                            </div>
                            <div class="splide__slide">
                                <video class="cursor-pointer" controls
                                    poster="./assets/videos/snehasish-thumbnail.jpg" width="100%">
                                    <source src="./assets/videos/Snehasish-testimonials.mp4" type="video/webm">
                                </video>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lg:pt-12 pt-6 pb-12" id="faq">
    <div class="container mx-auto px-4">
        <div class="pb-6">
            <div class="py-5">
                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Resolve
                    your
                    Queries</span>
            </div>
            <div>
                <h2 class="text-white text-[20px] lg:text-[35px] font-semibold">Frequently Asked Questions (FAQs)</h2>
                <p class="text-white">Do you have any questions about our <strong>animation course in Guwahati</strong>? Then, don’t worry;<br class="hidden md:block"> we have selected some practical questions that will pop into your mind. Have a quick look now!</p>
            </div>
        </div>
        <div class="flex flex-wrap gap-[2%]">

            <!-- Accordion Item 1 -->
            <div class="w-[100%] lg:w-[48%] h-full bg-[#222222] rounded-lg px-3 my-2">
                <button onclick="faqAccordion(1)"
                    class="w-full flex justify-between items-center py-3 px-3 text-slate-100">
                    <h2 class="text-[15px] md:text-[18px] text-[#CECDCD] text-left">What is the duration of the animation courses in Guwahati?</h2>
                    <span id="faqIcon-1" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4">
                            <path fill="white"
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                </button>
                <div id="faqContent-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="py-5 text-sm text-white border-t-[1px] border-[#4E4E4E]">
                        <p>
                            Our institute, Moople, offers different types of <srtong>animation courses in Guwahati</srtong>.  
                        </p>
                        <ul class="list-disc leading-6 ps-5">
                            <li>BSc in Animation - 4 Years</li>
                            <li>3D Animation Course - 19 Months</li>
                            <li>2D Animation Course - 18 Months</li>
                            <li>3D Modeling & AI - 4 Months</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="w-[100%] lg:w-[48%] h-full bg-[#222222] rounded-lg px-3 my-2">
                <button onclick="faqAccordion(2)"
                    class="w-full flex justify-between items-center py-3 px-3 text-slate-100">
                    <h2 class="text-[15px] md:text-[18px] text-[#CECDCD] text-left">What are the eligibility criteria to enroll in the course?</h2>
                    <span id="faqIcon-2" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4">
                            <path fill="white"
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                </button>
                <div id="faqContent-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="py-5 text-sm text-white border-t-[1px] border-[#4E4E4E]">
                        <p>
                            We at Moople Institute of Animation and Design do not seek any high criteria to join that course. You have to pass your <strong>10th standard with 50% marks</strong> in aggregate. Once the requirements are fulfilled, you can be admitted to our <strong>animation institute in Guwahati</strong>.  
                        </p>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="w-[100%] lg:w-[48%] h-full bg-[#222222] rounded-lg px-3 my-2">
                <button onclick="faqAccordion(3)"
                    class="w-full flex justify-between items-center py-3 px-3 text-slate-100">
                    <h2 class="text-[15px] md:text-[18px] text-[#CECDCD] text-left">What are the key topics covered in the animation course in Guwahati?</h2>
                    <span id="faqIcon-3" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4">
                            <path fill="white"
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                </button>
                <div id="faqContent-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="py-5 text-sm text-white border-t-[1px] border-[#4E4E4E]">
                        <p>
                            The key topics covered in Moople’s <strong>animation courses in Guwahati</strong> are categorized into two modules. The modules provide the knowledge of 3D modeling, texturing, Lighting and rendering. Being the <strong>best animation institute in Guwahati</strong>, we covered all the essential topics regarding animation technology.  
                        </p>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="w-[100%] lg:w-[48%] h-full bg-[#222222] rounded-lg px-3 my-2">
                <button onclick="faqAccordion(4)"
                    class="w-full flex justify-between items-center py-3 px-3 text-slate-100">
                    <h2 class="text-[15px] md:text-[18px] text-[#CECDCD] text-left">Will I receive a certification after completing the course?</h2>
                    <span id="faqIcon-4" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4">
                            <path fill="white"
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                </button>
                <div id="faqContent-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="py-5 text-sm text-white border-t-[1px] border-[#4E4E4E]">
                        <p>
                        Once you choose the Moople Institute of Animation and Design, you will know we are the best institute to provide <strong>animation courses in Guwahati</strong>. We give you an authorized certification after completing the course to help you get reputed job roles. 
                        </p>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="w-[100%] lg:w-[48%] h-full bg-[#222222] rounded-lg px-3 my-2">
                <button onclick="faqAccordion(5)"
                    class="w-full flex justify-between items-center py-3 px-3 text-slate-100">
                    <h2 class="text-[15px] md:text-[18px] text-[#CECDCD] text-left">Are placement services provided?</h2>
                    <span id="faqIcon-5" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4">
                            <path fill="white"
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                </button>
                <div id="faqContent-5" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="py-5 text-sm text-white border-t-[1px] border-[#4E4E4E]">
                        <p>
                            We, Moople Institute of Animation and Design, provide <strong>100% placement support</strong>. We are also famous for offering the best <strong>animation course in Guwahati</strong>. These two features have made us the most renowned institution for pursuing such courses.	
                        </p>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="w-[100%] lg:w-[48%] h-full bg-[#222222] rounded-lg px-3 my-2">
                <button onclick="faqAccordion(6)"
                    class="w-full flex justify-between items-center py-3 px-3 text-slate-100">
                    <h2 class="text-[15px] md:text-[18px] text-[#CECDCD] text-left">What are the career prospects after completing the animation course?</h2>
                    <span id="faqIcon-6" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4">
                            <path fill="white"
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                </button>
                <div id="faqContent-6" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="py-5 text-sm text-white border-t-[1px] border-[#4E4E4E]">
                        <p>
                            There are many career prospects after completing an animation course in Guwahati. You can join as an animator, lighting artist, character artist, editor, and concept artist. You have to pursue Moople’s <strong>animation training course in Guwahati</strong>. We provide strong placement support so that you can get those job roles in reputed companies.  
                        </p>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="w-[100%] lg:w-[48%] h-full bg-[#222222] rounded-lg px-3 my-2">
                <button onclick="faqAccordion(7)"
                    class="w-full flex justify-between items-center py-3 px-3 text-slate-100">
                    <h2 class="text-[15px] md:text-[18px] text-[#CECDCD] text-left">What is the fee structure for the animation course in Guwahati?</h2>
                    <span id="faqIcon-7" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4">
                            <path fill="white"
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                </button>
                <div id="faqContent-7" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="py-5 text-sm text-white border-t-[1px] border-[#4E4E4E]">
                        <p>
                            Moople offers various <strong>animation courses in Guwahati</strong>. The course fees vary for each course, please contact us for details.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="w-[100%] lg:w-[48%] h-full bg-[#222222] rounded-lg px-3 my-2">
                <button onclick="faqAccordion(8)"
                    class="w-full flex justify-between items-center py-3 px-3 text-slate-100">
                    <h2 class="text-[15px] md:text-[18px] text-[#CECDCD] text-left">How do I apply?</h2>
                    <span id="faqIcon-8" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4">
                            <path fill="white"
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                </button>
                <div id="faqContent-8" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="py-5 text-sm text-white border-t-[1px] border-[#4E4E4E]">
                        <p>
                            We, Moople Institute of Animation and Design, ask you to follow straightforward steps to get admitted to our institution. You must meet the minimal eligibility criteria and complete a basic form. Then, you can choose the <a href="centres" class="text-[#F08A31]">nearest branch</a> from your location and pay minimal fees to get the <strong>best animation course in Guwahati</strong>.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

</main>

<?php include('footer.php') ?>