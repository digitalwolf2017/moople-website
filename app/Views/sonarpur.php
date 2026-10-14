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
                            <h1 class="text-white text-[20px] lg:text-[35px] font-semibold ">Welcome to Moople Sonarpur</h1>
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
                            <img src="./assets/img/centres/sonarpur/moople-sonarpur-infra-1.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/centres/sonarpur/moople-sonarpur-infra-2.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/centres/sonarpur/moople-sonarpur-infra-3.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/centres/sonarpur/moople-sonarpur-infra-4.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/centres/sonarpur/moople-sonarpur-infra-5.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/centres/sonarpur/moople-sonarpur-infra-6.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/centres/sonarpur/moople-sonarpur-infra-7.webp" alt="" width="100%" height="100%">
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div>
                            <img src="./assets/img/centres/sonarpur/moople-sonarpur-infra-8.webp" alt="" width="100%" height="100%">
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