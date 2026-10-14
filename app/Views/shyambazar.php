<?php include('header.php') ?>


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
                   <div
    class="px-5 pt-1 pb-6 bg-gradient-to-b from-[#000000] to-[#000000cc] max-w-full w-[400px] mx-auto shadow-[0px_1px_2px_#ffffff70] shadow-white rounded">
    <form id="frm_admission_open_animation1" name="frm_admission_open" method="post" enctype="multipart/form-data" action="<?php echo base_url('leads.php');?>">
        <div>
            <p class="text-[#FFF] text-[25px] text-center py-3 font-semibold">Connect with our <span
                    class="text-[#F08A31]">Counselor</span></p>
        </div>
        <div class="mb-5">
            <input
                class="block w-full rounded border-0 p-2 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                type="text" placeholder="Name" name="name" required>
        </div>
        <div class="mb-5">
            <input
                class="block w-full rounded border-0 p-2 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                type="email" placeholder="Email" name="email" required>
        </div>
        <div class="mb-5">
            <input
                class="block w-full rounded border-0 p-2 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                type="text" placeholder="Phone" name="phone" required pattern="[1-9]{1}[0-9]{9}" maxlength="10">
        </div>
        <div class="mb-5">
            <select id="qualification" name="educational_qualification" autocomplete="none"
                class="block w-full rounded border-0 p-2 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                <option value="">Qualification</option>
                <option>Completed Class 10</option>
                  <option>Completing HS in 2026</option>
                  <option>Pursuing Graduation / Graduate</option>
                  <option>Others</option>
            </select>
        </div>
        <div class="mb-5">
            <select id="course" name="course" autocomplete="none"
                class="block w-full rounded border-0 p-2 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                <option value="">Select Course</option>
                <option value="BSc in Animation Film Making">BSc in Animation Film Making</option>
                <option value="Advanced 3D Animation & AI">Advanced 3D Animation & AI</option>
                <option value="2D Animation & AI">2D Animation & AI</option>
                <option value="3D Modelling & AI">3D Modelling & AI</option>
                <option value="BSc in VFX Film Making">BSc in VFX Film Making</option>
                <option value="Visual Effects & AI">Visual Effects & AI</option>
                <option value="Motion Graphics, Video Editing & AI">Motion Graphics, Video Editing & AI</option>
                <option value="Advanced Graphic Design & AI">Advanced Graphic Design & AI</option>
                <option value="Graphic Design & AI">Graphic Design & AI</option>
                <option value="Web Design & AI">Web Design & AI</option>
                <option value="UI/UX Design & AI">UI/UX Design & AI</option>
                <option value="Digital Marketing & AI">Digital Marketing & AI</option>
            </select>
        </div>
       
        <div class="w-full px-2 pb-2 flex justify-center scale-[.9]">
            <div class="g-recaptcha" data-sitekey="6Lf9ePspAAAAALVVScUj3pDoYvTqyvwPF9nX2Acz" data-callback="verifyCaptcha"></div>
                  <div id="captcha-error3214animation1" class="text-center fw-bold mt-3" style="color: red;"></div>
        </div>
        <div>
            <input type="hidden" name="utm_source" value="<?php echo (isset($_GET['utm_source']) && $_GET['utm_source']!='') ? $_GET['utm_source'] : '';?>" />
            <input type="hidden" name="utm_medium" value="<?php echo (isset($_GET['utm_medium']) && $_GET['utm_medium']!='') ? $_GET['utm_medium'] : '';?>" />
            <input type="hidden" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign']) && $_GET['utm_campaign']!='') ? $_GET['utm_campaign'] : '';?>" />

            <input type="hidden" name="redirect_from" value="<?php echo $page_name;?> centres page">
            <input type="hidden" name="location" value="<?php echo $page_name;?>">
                
            <button type="submit"
                class="text-[#FFF] w-full px-5 py-2 rounded flex justify-center items-center gap-x-2 bg-gradient-to-r from-[#F08A31] to-[#B5341D] mt-3">Submit
                <img src="./assets/icons/send.png" alt=""></button>
        </div>
    </form>
</div>
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
                            <h1 class="text-white text-[20px] lg:text-[35px] font-semibold ">Welcome to Moople Shyambazar</h1>
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