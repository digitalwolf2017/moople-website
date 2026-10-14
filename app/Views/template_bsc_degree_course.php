<?php include('header.php') ?>
<?php
$rawContent = isset($dynamic_body_content) && $dynamic_body_content !== null ? trim((string) $dynamic_body_content) : '';
$decodedContent = $rawContent !== '' ? json_decode($rawContent, true) : [];
$jsonContent = is_array($decodedContent) ? $decodedContent : [];
$moduleContent = isset($dynamic_course_sections) && is_array($dynamic_course_sections) ? $dynamic_course_sections : [];
$content = !empty($moduleContent) ? $moduleContent : $jsonContent;

$defaultContent = [
    'banner' => [
        'image' => './assets/img/course/bsc-animation-banner.webp',
        'alt' => 'Animation Course',
        'heading' => 'Animation Course',
    ],
    'course_cards' => [
        [
            'title' => 'BSc in Animation',
            'duration' => '4 Years',
            'image' => './assets/img/course/bsc-animation-mini.webp',
            'link' => 'bsc-in-animation',
            'active' => true,
        ],
        [
            'title' => '3D Animation Course',
            'duration' => '19 Months',
            'image' => './assets/img/course/animation-mini.webp',
            'link' => 'animation-course',
            'active' => false,
        ],
        [
            'title' => '2D Animation Course',
            'duration' => '18 Months',
            'image' => './assets/img/course/2d-animation-mini.webp',
            'link' => '2d-animation-course',
            'active' => false,
        ],
        [
            'title' => '3D Modeling Course',
            'duration' => '4 Months',
            'image' => './assets/img/course/3d-modelling-AI-mini.webp',
            'link' => '3d-modelling-course',
            'active' => false,
        ],
    ],
    'intro' => [
        'image' => '../assets/img/course/3d-animation/bsc-3d.webp',
        'image_alt' => 'BSc in Animation Film Making',
        'title' => 'BSc in Animation Film Making',
        'highlights' => [
            'Industry-Seasoned Faculty',
            'AI Integrated Educational Curriculum',
            'Cutting Edge Infrastructure',
            'Guaranteed Placement Guidance',
        ],
        'paragraphs' => [
            'More than 950 satellite TV channels and an increasing number of video-on-demand platforms are actively seeking animation content. With huge demand for Animation artists across the nation, our 4 year <strong>BSc in Animation</strong> equips students with industry-relevant skills, including the latest software and plugins.',
            'Moople has consistently ranked among the top <strong>animation degree course</strong> providers for the past several years, making it the first choice for hundreds of students.',
        ],
    ],
    'course_details' => [
        'tag' => 'BSc in Animation Film Making',
        'heading' => 'BSc In Animation Course Details',
        'description' => 'Moople, in collaboration with reputed colleges, offers both Full-Time & Weekend 4 year <strong>Degree in Animation</strong>. Affiliated to MAKAUT in association with Institute of Management Study and Dr. B.C. Roy Academy of Professional Courses, our <strong>animation degree course</strong> has been curated keeping in mind the industry requirements.',
        'course_title' => 'BSc in Animation Film Making',
        'duration' => '4 years',
        'module_image' => './assets/img/course/3d-animation/animation-module.webp',
        'module_image_alt' => 'Animation module',
    ],
    'semesters' => [
        [
            'title' => 'Semester 1 - Curriculum & Software',
            'duration' => '6 months',
            'subjects' => ['Introduction to Drawing', 'Introduction to Visual Design'],
            'software' => [
                ['name' => 'Adobe Illustrator', 'image' => './assets/img/software-logo/illustrator.webp'],
            ],
        ],
        [
            'title' => 'Semester 2 - Curriculum & Software',
            'duration' => '6 months',
            'subjects' => ['Graphic Designing, Audio & Video Editing', 'Digital Design and Branding'],
            'software' => [
                ['name' => 'Adobe Photoshop', 'image' => './assets/img/software-logo/photoshop.webp'],
                ['name' => 'Adobe Premiere Pro', 'image' => './assets/img/software-logo/premier-pro.webp'],
            ],
        ],
        [
            'title' => 'Semester 3 - Curriculum & Software',
            'duration' => '6 months',
            'subjects' => ['Introduction to CG Modelling', 'Texturing'],
            'software' => [
                ['name' => 'Autodesk Maya', 'image' => './assets/img/software-logo/autodesk-maya.webp'],
                ['name' => 'Substance Painter', 'image' => './assets/img/software-logo/substaince-painter.webp'],
            ],
        ],
        [
            'title' => 'Semester 4 - Curriculum & Software',
            'duration' => '6 months',
            'subjects' => ['Lighting & Rendering', 'Rigging', 'Props & Character Animation'],
            'software' => [
                ['name' => 'Autodesk Maya', 'image' => './assets/img/software-logo/autodesk-maya.webp'],
                ['name' => 'Arnold Render', 'image' => './assets/img/software-logo/arnold-render.webp'],
            ],
        ],
    ],
    'fees' => [
        'tag' => 'Degree Course',
        'heading' => 'Course Fee and Payment Options',
        'fee_label' => 'Fee Range:',
        'note' => 'Fees may differ based on location and timing',
        'amount' => '&#8377; 4,50,000 - 5,65,000',
        'cards' => [
            ['icon' => './assets/icons/Scholarship.png', 'text' => 'Scholarship available for <br/> eligible students', 'width' => '123'],
            ['icon' => './assets/icons/card.png', 'text' => 'West Bengal Student Credit Card Scheme <br>(For WB only)', 'width' => '175'],
        ],
        'payment_note' => 'Semester payments can also be made via Visa / Master Card / Rupay / UPI / Bank Transfer / Cheque / Demand Draft / Cash (upto 50k)',
    ],
    'faculties' => [
        
        ['name' => 'Sourav Burai', 'specialization' => '3D Animation', 'experience' => '14 Years', 'image' => './assets/img/faculties/animation/sourav-burai.webp'],
        ['name' => 'Pavel Dutta', 'specialization' => '3D Animation', 'experience' => '9 Years', 'image' => './assets/img/faculties/animation/pavel-dutta.webp'],
        ['name' => 'Snehanshu Mukherjee', 'specialization' => '3D Animation', 'experience' => '20 Years', 'image' => './assets/img/faculties/animation/snehanshu-mukherjee.webp'],
    ],
    'career' => [
        'tag' => 'Future Leaders',
        'heading' => 'Career Opportunity',
        'description' => 'The completion of our <strong>BSc in Animation Course</strong> offers students a wide range of career opportunities across various sectors.',
        'cards' => [
            [
                'title' => 'Film and Television',
                'image' => './assets/img/course/3d-animation/career-opportunity/film.webp',
                'roles' => ['3D Animator', 'Character Animator', 'Visual Effects (VFX) Artist', 'Technical Director', 'Animation Director'],
            ],
            [
                'title' => 'Video Games',
                'image' => './assets/img/course/3d-animation/career-opportunity/video-games.webp',
                'roles' => ['Game Animator', 'Character Animator', 'Environment Artist', '3D Modeler', 'Animation Designer'],
            ],
            [
                'title' => 'Architecture and Real Estate',
                'image' => './assets/img/course/3d-animation/career-opportunity/real-estate-industry.webp',
                'roles' => ['Architectural Visualizer', '3D Modeler', 'Visualization Artist'],
            ],
            [
                'title' => 'Product Design and Manufacturing',
                'image' => './assets/img/course/3d-animation/career-opportunity/product.webp',
                'roles' => ['3D Product Animator', 'Product Visualizer', 'Simulation Artist'],
            ],
        ],
    ],
    'placements' => [
        './assets/img/placement/animation/shlok-das.webp',
        './assets/img/placement/animation/swarnali-ghorui.webp',
        './assets/img/placement/animation/shivangi-das.webp',
        './assets/img/placement/animation/sandipan-karmakar.webp',
        './assets/img/placement/animation/pritam-koley.webp',
        './assets/img/placement/animation/tithi-paul.webp',
        './assets/img/placement/animation/akash-deb.webp',
        './assets/img/placement/animation/abhipsha-mondal.webp',
    ],
    'testimonials' => [
        ['poster' => './assets/videos/debraj-thumbnail.jpg', 'source' => './assets/videos/Debraj-testimonials.mp4'],
        ['poster' => './assets/videos/ranjita-thumbnail.jpg', 'source' => './assets/videos/Ranjita-testimonials.mp4'],
        ['poster' => './assets/videos/safan-thumbnail.jpg', 'source' => './assets/videos/Safan-testimonials.mp4'],
        ['poster' => './assets/videos/snehasish-thumbnail.jpg', 'source' => './assets/videos/Snehasish-testimonials.mp4'],
    ],
    'faqs' => [
        [
            'question' => 'How can I pursue a BSc in Animation from a renowned institute?',
            'answer' => 'To join Moople Institute of Animation and Design, you have to clear your higher secondary level with 50% marks in aggregate. Once eligible, you can pursue a <strong>BSc Animation course</strong> from Moople.',
        ],
        [
            'question' => 'Is Moople Institute good for pursuing animation degree courses?',
            'answer' => 'Moople Institute of Animation and Design is one of the best institutes for pursuing an <strong>animation degree course</strong>. The course duration is 4 years and includes certification and placement guidance support.',
        ],
        [
            'question' => 'List of Cities where Moople branches are located',
            'answer' => 'Moople has branches in Kolkata, Bardhaman, Berhampore, Chandannagar, Guwahati, Mecheda, Midnapore, Siliguri, Delhi and other locations.',
        ],
        [
            'question' => 'What are the eligibility criteria to get admission in a BSc Animation course?',
            'answer' => 'You need to clear your 10+2 level with 50% marks in aggregate to enroll in the course.',
        ],
    ],
];

function bsc_merge_content(array $defaults, array $content): array
{
    $replaceKeys = [
        'course_cards',
        'cards',
        'highlights',
        'paragraphs',
        'semesters',
        'faculties',
        'placements',
        'testimonials',
        'faqs',
    ];

    foreach ($content as $key => $value) {
        if (in_array($key, $replaceKeys, true)) {
            $defaults[$key] = is_array($value) ? $value : [];
            continue;
        }

        if (isset($defaults[$key]) && is_array($defaults[$key]) && is_array($value)) {
            $defaults[$key] = bsc_merge_content($defaults[$key], $value);
            continue;
        }

        $defaults[$key] = $value;
    }

    return $defaults;
}

$data = bsc_merge_content($defaultContent, $content);
if (empty($moduleContent) && empty($jsonContent) && $rawContent !== '') {
    $data['intro']['paragraphs'] = [$rawContent];
}

function bsc_value(array $data, string $key, $default = '')
{
    return isset($data[$key]) && $data[$key] !== '' ? $data[$key] : $default;
}

function bsc_html($value): string
{
    return (string) $value;
}

function bsc_attr($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>

<main id="reserve2" class="mt-[10rem] lg:mt-[8.3rem]">
    <section class="banner relative w-[95%] block ms-auto">
        <img class="block ms-auto rounded-s-xl" src="<?php echo bsc_attr($data['banner']['image']); ?>" alt="<?php echo bsc_attr($data['banner']['alt']); ?>" width="100%" height="100%">
        <div class="absolute inset-0 flex items-center justify-start md:ml-32 ml-4">
            <h1 class="text-white text-xl md:text-5xl font-bold"><?php echo bsc_html($data['banner']['heading']); ?></h1>
        </div>
    </section>

    <?php if (!empty($data['course_cards']) && is_array($data['course_cards'])) { ?>
    <section class="mt-6 lg:-mt-12 relative z-[2]">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-y-2 lg:gap-y-0">
                <?php foreach ($data['course_cards'] as $card) {
                    $isActive = !empty($card['active']);
                    $cardClass = $isActive ? 'bg-gradient-to-b from-[#F08A31] to-[#B5341D]' : 'bg-gradient-to-b from-[#505050] to-[#000000] border-[1px] border-[#434343]';
                ?>
                <!--<div class="w-full lg:w-[22%] mx-3">-->
                <!--    <a href="<?php echo bsc_attr(bsc_value($card, 'link', '#')); ?>">-->
                <!--        <div class="flex gap-x-3 items-center rounded-lg <?php echo $cardClass; ?> p-1">-->
                <!--            <img class="rounded-lg hidden lg:block" src="<?php echo bsc_attr(bsc_value($card, 'image')); ?>" alt="<?php echo bsc_attr(bsc_value($card, 'title')); ?>" width="75" height="75">-->
                <!--            <div class="flex justify-start gap-x-1 px-2 w-full lg:block">-->
                <!--                <?php if ($isActive) { ?>-->
                <!--                    <h1 class="text-white text-[15px] lg:text-[20px] lg:font-semibold"><?php echo bsc_html(bsc_value($card, 'title')); ?></h1>-->
                <!--                <?php } else { ?>-->
                <!--                    <p class="text-white text-[15px] lg:text-[20px] lg:font-semibold"><?php echo bsc_html(bsc_value($card, 'title')); ?></p>-->
                <!--                <?php } ?>-->
                <!--                <p class="text-white text-[15px] hidden lg:block">Duration - <?php echo bsc_html(bsc_value($card, 'duration')); ?></p>-->
                <!--                <p class="text-white text-[15px] lg:hidden block">- <?php echo bsc_html(bsc_value($card, 'duration')); ?></p>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <?php } ?>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="py-6 pt-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap gap-y-5">
                <div class="w-full lg:w-[40%] px-3">
                    <div class="p-4 relative">
                        <img class="rounded-lg" src="<?php echo bsc_attr($data['intro']['image']); ?>" alt="<?php echo bsc_attr($data['intro']['image_alt']); ?>" width="100%" height="100%">
                        <div class="absolute z-2 -bottom-0 lg:right-0 right-[50px]">
                            <button data-modal-target="bscPopup" class="bg-gradient-to-b from-[#F08A31] to-[#B5341D] text-center px-6 lg:px-12 py-3 lg:py-6 rounded-lg font-semibold text-white leading-[17px]">
                                <img class="md:block mx-auto hidden" src="./assets/icons/prospectus.png" alt="" width="50" height="100%">
                                Download <br class="hidden md:block"/>Prospectus
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-[60%] px-3">
                    <div class="py-6">
                        <div class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] py-2 max-w-full inline-block px-5 rounded-lg">
                            <p class="text-white lg:text-center text-[18px] lg:text-[35px] font-semibold"><?php echo bsc_html($data['intro']['title']); ?></p>
                        </div>
                        <div class="text-white mt-5">
                            <div class="flex flex-wrap gap-y-3">
                                <?php foreach ((array) $data['intro']['highlights'] as $highlight) { ?>
                                <div class="w-full lg:w-[50%] flex items-center gap-x-2">
                                    <img src="./assets/icons/check-circle.png" alt="" width="20" height="20">
                                    <p class="lg:text-[18px]"><?php echo bsc_html($highlight); ?></p>
                                </div>
                                <?php } ?>
                            </div>
                            <?php foreach ((array) $data['intro']['paragraphs'] as $index => $paragraph) { ?>
                                <div class="<?php echo $index === 0 ? 'py-5' : ''; ?>">
                                    <p class="text-[#bcbcbc] text-[16px]"><?php echo bsc_html($paragraph); ?></p>
                                </div>
                            <?php } ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('components/course-form.php'); ?>
    <?php include('components/scrollButton'); ?>
    
     <section class="bg-[#000] py-5">
            <div class="container mx-auto px-4">
                <div>
                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Our Courses</span>
                    <h2 class="text-[#FFF] text-[25px] lg:text-[35px] font-semibold mt-3">Course Offerings</h2>
                    <p class="text-[#FFF]">Explore our industry relevant certificate and degree courses and start shaping your future today! Dive into our comprehensive programs in Animation,<br/> VFX, Web Design, Digital Marketing, Graphic Design to gain the skills you need to succeed! </p>
                </div>
                <div class="flex flex-wrap lg:pt-12 pt-6">
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="bca-course">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/bca-card.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Degree Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="bca-course">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">Bachelor of Computer Application</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">4 years Degree Course awarded by 
                                    <br/>Calcutta University.</p>
                                <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="bsc-in-cyber-security">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="bsc-in-cyber-security">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/cyber-security-banner.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Degree Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="bsc-in-cyber-security">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">BSC in Cyber Security</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">4 years Degree Course awarded by 
                                    <br/>Calcutta University.</p>
                                <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="bsc-in-cyber-security">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="bsc-multimedia-web-development">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/multimedia-design-and-web-developmen.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Degree Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="bsc-multimedia-web-development">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">BSC in Multimedia, Design and Web Development</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">4 years Degree Course awarded by  
                                    <br/>Calcutta University.</p>
                                    <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="bsc-multimedia-web-development">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="bsc-in-animation">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/animation-academy.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Degree Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="bsc-in-animation">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">BSc in Animation Film Making</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">4 years Degree Course awarded by  
                                    <br/>MAKAUT University.</p>
                                    <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="bsc-in-animation">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="bsc-in-vfx">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/vfx-academy.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Degree Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="bsc-in-vfx">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">BSc in VFX Film Making</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">4 years Degree Course awarded by
                                    <br/>MAKAUT University.</p>
                                    <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="bsc-in-vfx">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="bba-in-digital-marketing">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/digital-marketing.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Degree Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="bba-in-digital-marketing">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">BBA in Digital Marketing</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">4 years Degree Course awarded by 
                                    <br/>MAKAUT University.</p>
                                <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="bba-in-digital-marketing">Know More</a>
                            </div>
                        </div>
                    </div>

                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="animation-course">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/animation-3d-academy.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="animation-course">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">Advanced 3D Animation & AI</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">Learn to create dynamic 3D animations, using industry-standard software.</p>
                                <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="animation-course">Know More</a>
                            </div>
                        </div>
                    </div>
                    <!--<div class="w-[100%] md:w-[50%] lg:w-[33.33%] lg:p-8 p-6">-->
                    <!--    <div class="relative">-->
                    <!--        <div class="overflow-hidden rounded-lg">-->
                    <!--            <a href="2d-animation-course">-->
                    <!--                <img class="bg-[#262626] w-full h-auto transition duration-500 hover:scale-125" loading="lazy" src="./assets/img/course/animation-2d-academy.jpg" alt="" width="409" height="596">-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--        <div class="absolute top-4 right-4">-->
                    <!--            <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>-->
                    <!--        </div>-->
                    <!--        <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">-->
                    <!--            <a href="2d-animation-course" class="text-[#F08A31] text-[20px] leading-[25px] font-semibold">2D Animation & AI</a>-->
                    <!--            <p class="text-[#FFF] mb-3">Master the art of 2D animation, using traditional techniques and digital tools to bring drawings to life.</p>-->
                    <!--            <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="2d-animation-course">Know More</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="game-development-course">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/game-course/game-arts-and-animation.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="game-development-course">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">3D Gaming</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">Dive into the world of Game Art & Animation course</p>
                                <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="game-development-course">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="vfx-course">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/vxf-certificate-academy.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="vfx-course">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">Visual Effects & AI</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">Explore the fundamentals of VFX, including roto, paint, compositing and special effects to enhance visual storytelling.</p>
                                <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="vfx-course">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="graphic-design-course">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/graphics-academy.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="graphic-design-course">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">Advanced Graphic Design & AI</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">Learn graphic design principles and softwares to create visually compelling designs for print and digital media.</p>
                                <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="graphic-design-course">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="web-design-course">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/web-designing-pro.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="web-design-course">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">Web Design & AI</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">Develop skills to create visually appealing websites using modern design tools & techniques.</p>
                                <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="web-design-course">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[100%] md:w-[50%] lg:w-[24%] lg:p-8 p-6">
                        <div class="relative">
                            <div class="overflow-hidden rounded-lg">
                                <a href="digital-marketing-course">
                                    <img class="transition duration-500 hover:scale-125 w-full h-auto bg-[#111111]" loading="lazy" src="./assets/img/course/digital-marketing-certificate.webp" alt="" width="409" height="596">
                                </a>
                            </div>
                            <div class="absolute top-5 right-3">
                                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Certificate Course</span>
                            </div>
                            <div class="absolute w-full bottom-0 left-0 px-3 py-3 bg-gradient-to-b from-[transparent] to-[#000]">
                                <a href="digital-marketing-course">
                                    <p class="text-[#F08A31] text-[18px] lg:text-[20px] pb-1 font-semibold leading-[25px] lg:leading-tight">Digital Marketing & AI</p>
                                </a>
                                <p class="text-[#FFF] mb-3 text-[15px] lg:text-[17px] leading-[20px]">Discover digital marketing strategies and tools to effectively promote products and services online.</p>
                                <a class="text-[#ababab] px-4 py-1 float-right transition duration-500" href="digital-marketing-course">Know More</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div>
                    <div>
                        <img class="block mx-auto max-w-full max-w-full w-[400px] h-auto" loading="lazy" src="./assets/img/course/all-courses-text.webp" alt="" width="400" height="69">
                    </div>
                    <div class="flex justify-center">
                        <a class="border-[1px] border-[#808080] text-[#FFF] px-5 py-2 rounded-lg hover:bg-[#808080] hover:text-[#000000] transition-all duration-500 ease" href="courses">View all courses</a>
                    </div>
                </div>
            </div>
        </section>

    <section class="lg:pt-12 lg:pb-12 pt-6 pb-6 bg-[#1E1E1E]" id="course-details">
        <div class="container mx-auto px-4">
            <div class="pb-6">
                <div class="py-5">
                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded"><?php echo bsc_html($data['course_details']['tag']); ?></span>
                </div>
                <div>
                    <h2 class="text-white text-[20px] lg:text-[35px] font-semibold"><?php echo bsc_html($data['course_details']['heading']); ?></h2>
                    <p class="text-white"><?php echo bsc_html($data['course_details']['description']); ?></p>
                </div>
            </div>
            <div class="flex flex-wrap gap-y-5">
                <div class="w-full lg:w-[50%] px-3 order-2 lg:order-1">
                    <div class="pt-4">
                        <h3 class="text-[#F08A31] text-[22px] font-semibold"><?php echo bsc_html($data['course_details']['course_title']); ?></h3>
                        <p class="text-white">Duration: <?php echo bsc_html($data['course_details']['duration']); ?></p>
                    </div>
                    <div class="pt-5">
                        <?php foreach ((array) $data['semesters'] as $index => $semester) {
                            $itemNo = $index + 1;
                            $isOpen = $index === 0;
                        ?>
                        <div class="bg-[#262626] rounded-lg mb-3">
                            <button id="header-<?php echo $itemNo; ?>" onclick="toggleAccordion(<?php echo $itemNo; ?>)" class="w-full flex justify-between text-left items-center py-3 px-5 text-slate-100 transition-colors duration-300 <?php echo $isOpen ? 'bg-[#262626]' : 'bg-[#0D0D0D]'; ?> rounded-lg">
                                <span class="text-[15px] md:text-[18px] text-[#F08A31] text-left"><?php echo bsc_html(bsc_value($semester, 'title')); ?> (Duration <?php echo bsc_html(bsc_value($semester, 'duration')); ?>)</span>
                                <span id="icon-<?php echo $itemNo; ?>" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                        <path fill="white" d="<?php echo $isOpen ? 'M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z' : 'M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z'; ?>" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-<?php echo $itemNo; ?>" class="<?php echo $isOpen ? 'overflow-hidden' : 'max-h-0 overflow-hidden'; ?> transition-all duration-300 ease-in-out px-5" <?php echo $isOpen ? 'style="max-height: 500px;"' : ''; ?>>
                                <div class="pb-5 text-sm text-slate-300 border-t-[1px] border-[#4E4E4E]">
                                    <div class="py-5">
                                        <?php foreach ((array) bsc_value($semester, 'subjects', []) as $subject) { ?>
                                        <div class="flex items-center gap-2">
                                            <img src="./assets/icons/chevron-right.svg" alt="" width="17" height="17">
                                            <p class="text-lg"><?php echo bsc_html($subject); ?></p>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <?php if (!empty($semester['software'])) { ?>
                                    <div><p class="text-[#F08A31] text-[17px]">Software Taught</p></div>
                                    <div class="flex flex-wrap gap-x-3 pt-3">
                                        <?php foreach ((array) $semester['software'] as $software) { ?>
                                        <div class="text-center">
                                            <img class="mx-auto p-1" src="<?php echo bsc_attr(bsc_value($software, 'image')); ?>" alt="<?php echo bsc_attr(bsc_value($software, 'name')); ?>" width="50" height="50">
                                            <p><?php echo bsc_html(bsc_value($software, 'name')); ?></p>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="w-full lg:w-[50%] px-3 order-1 lg:order-2">
                    <img class="rounded-lg" src="<?php echo bsc_attr($data['course_details']['module_image']); ?>" alt="<?php echo bsc_attr($data['course_details']['module_image_alt']); ?>" width="100%" height="100%">
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 lg:py-12" id="payment">
        <div class="container mx-auto px-4">
            <div class="pb-6">
                <div class="py-5"><span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded"><?php echo bsc_html($data['fees']['tag']); ?></span></div>
                <h2 class="text-white text-[20px] lg:text-[35px] font-semibold"><?php echo bsc_html($data['fees']['heading']); ?></h2>
            </div>
            <div class="md:flex justify-between items-center px-4 py-2 bg-[#222222] rounded-lg">
                <div>
                    <p class="text-white text-[30px] font-semibold"><?php echo bsc_html($data['fees']['fee_label']); ?></p>
                    <p class="text-[#898989]"><?php echo bsc_html($data['fees']['note']); ?></p>
                </div>
                <p class="text-[#F08A31] text-[25px] lg:text-[30px] font-semibold"><?php echo bsc_html($data['fees']['amount']); ?></p>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-12 pt-20">
                <?php foreach ((array) $data['fees']['cards'] as $card) { ?>
                <div class="w-[100%] lg:h-[160px] lg:w-[30%] bg-[#222222] rounded-lg p-2 flex justify-between flex-col">
                    <div class="-mt-12"><img class="block mx-auto bg-[#111111] p-3.5 rounded-lg" src="<?php echo bsc_attr(bsc_value($card, 'icon')); ?>" alt="" width="<?php echo bsc_attr(bsc_value($card, 'width', '123')); ?>" height="100%"></div>
                    <div class="pt-3 lg:pt-0"><p class="text-white text-center pb-2 text-[14px] lg:text-[17px]"><?php echo bsc_html(bsc_value($card, 'text')); ?></p></div>
                </div>
                <?php } ?>
                <div><p class="text-white"><?php echo bsc_html($data['fees']['payment_note']); ?></p></div>
            </div>
        </div>
    </section>

    <?php if (!empty($data['faculties'])) { ?>
    <section class="pt-6" id="faculties">
        <div class="container mx-auto px-4">
            <div class="pb-[4rem] lg:pb-12">
                <div class="py-5"><span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Industry Experts</span></div>
                <h2 class="text-white text-[20px] lg:text-[35px] font-semibold">Industry Experience Faculties</h2>
                <p class="text-white">Moople faculties comprise of well seasoned professionals with extensive experience in their respective fields.</p>
            </div>
            <div id="faculties-slide" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ((array) $data['faculties'] as $faculty) { ?>
                        <li class="splide__slide relative">
                            <div class="relative">
                                <div class="relative before:content-[''] before:bg-gradient-to-t before:from-[#000000] before:to-[#00000000] before:w-full before:h-full before:absolute before:top-0 before:left-0 before:opacity-100">
                                    <img class="rounded-lg" src="<?php echo bsc_attr(bsc_value($faculty, 'image')); ?>" alt="<?php echo bsc_attr(bsc_value($faculty, 'name')); ?>" width="100%" height="100%">
                                </div>
                                <div class="absolute bottom-0 left-0 z-2 w-full p-4">
                                    <h3 class="text-white text-[25px] font-medium leading-tight"><?php echo bsc_html(bsc_value($faculty, 'name')); ?></h3>
                                    <p class="text-[#F08A31]"><?php echo bsc_html(bsc_value($faculty, 'specialization')); ?></p>
                                    <p class="text-white">Experience - <?php echo bsc_html(bsc_value($faculty, 'experience')); ?></p>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="py-12" id="career">
        <div class="container mx-auto px-4">
            <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded"><?php echo bsc_html($data['career']['tag']); ?></span>
            <h2 class="text-[#FFF] text-[20px] lg:text-[35px] font-semibold mt-3"><?php echo bsc_html($data['career']['heading']); ?></h2>
            <p class="text-[#FFF]"><?php echo bsc_html($data['career']['description']); ?></p>
            <div class="pt-12">
                <div id="future-leaders" class="splide one" aria-label="Career opportunities">
                    <div class="splide__track pb-6">
                        <div class="splide__list">
                            <?php foreach ((array) $data['career']['cards'] as $card) { ?>
                            <div class="splide__slide">
                                <div class="relative p-3 border-[1px] border-[#424242] rounded-lg">
                                    <img src="<?php echo bsc_attr(bsc_value($card, 'image')); ?>" alt="<?php echo bsc_attr(bsc_value($card, 'title')); ?>" width="100%" height="100%">
                                    <div class="absolute -bottom-6 left-4 w-[90%] p-3 rounded-lg bg-[#003366eb]">
                                        <button class="dropdown-button text-white text-[17px] h-10 py-2 px-3 text-left flex justify-between items-center w-full">
                                            <span><?php echo bsc_html(bsc_value($card, 'title')); ?></span>
                                            <span class="dropdown-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4"><path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" /></svg></span>
                                        </button>
                                        <ul class="dropdown-menu list-disc ps-8 max-h-0 overflow-hidden transition-[max-height] duration-500 ease-in-out">
                                            <?php foreach ((array) bsc_value($card, 'roles', []) as $role) { ?>
                                            <li class="mb-2 text-[#FFF]"><?php echo bsc_html($role); ?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-[#1C1C1C]" id="moopleAchiver">
        <div class="container mx-auto px-4">
            <div class="pb-[2rem] lg:pb-2">
                <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Moople Achievers</span>
                <h2 class="text-[#FFF] text-[20px] lg:text-[35px] font-semibold mt-3">Building Careers Through Strategic Placement</h2>
                <p class="text-[#FFF] pb-3">Moople empowers students with real world opportunities ensuring that they can put to use the comprehensive training and industry exposure received in the classroom.</p>
            </div>
            <div class="pt-8">
                <div id="placement" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php foreach ((array) $data['placements'] as $placement) { ?>
                            <li class="splide__slide relative"><img class="rounded-t-lg" src="<?php echo bsc_attr($placement); ?>" alt="" width="100%" height="100%"></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('components/recruiters'); ?>

    <section class="bg-[#000] py-5 relative z-[20] lg:pt-[90px] lg:pb-[60px] overflow-hidden" id="testimonial">
        <div class="container ms-auto px-4 lg:px-0">
            <div class="flex flex-wrap gap-y-[5rem] before:content-[''] before:w-[900px] before:h-full before:absolute before:left-0 before:top-0 before:bg-[#262626] before:z-[-1]">
                <div class="w-[100%] lg:w-[30%] px-2">
                    <div class="text-white">
                        <span class="text-[20px]">Our Students</span>
                        <h2 class="text-[20px] lg:text-[40px] leading-[30px] lg:leading-[50px] font-semibold mb-0 py-3">Our Greatest Brand Ambassadors</h2>
                        <p class="mb-0">Showcasing students' real-life experiences and success stories.</p>
                    </div>
                </div>
                <div class="w-[100%] lg:w-[70%] px-2 flex justify-center flex-col">
                    <div id="testimonials" class="splide testimonials" aria-label="Testimonials">
                        <div class="splide__track pb-6">
                            <div class="splide__list">
                                <?php foreach ((array) $data['testimonials'] as $video) { ?>
                                <div class="splide__slide">
                                    <video class="cursor-pointer" controls poster="<?php echo bsc_attr(bsc_value($video, 'poster')); ?>" width="100%">
                                        <source src="<?php echo bsc_attr(bsc_value($video, 'source')); ?>" type="video/webm">
                                    </video>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-6 lg:pt-12 pb-12" id="faq">
        <div class="container mx-auto px-4">
            <div class="pb-6">
                <div class="py-5"><span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Resolve your Queries</span></div>
                <h2 class="text-white text-[20px] lg:text-[35px] font-semibold">Frequently Asked Questions (FAQs)</h2>
                <p class="text-white">Answering your questions with quick and helpful information.</p>
            </div>
            <div class="flex flex-wrap jusitfy-center gap-[2%]">
                <?php foreach ((array) $data['faqs'] as $index => $faq) {
                    $faqNo = $index + 1;
                ?>
                <div class="w-[100%] lg:w-[48%] h-full bg-[#222222] rounded-lg px-5 my-2">
                    <button onclick="faqAccordion(<?php echo $faqNo; ?>)" class="w-full flex justify-between items-center py-3 text-slate-100">
                        <h2 class="text-[15px] md:text-[18px] text-[#CECDCD] text-left"><?php echo bsc_html(bsc_value($faq, 'question')); ?></h2>
                        <span id="faqIcon-<?php echo $faqNo; ?>" class="text-slate-800 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path fill="white" d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div id="faqContent-<?php echo $faqNo; ?>" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="py-5 text-sm text-white border-t-[1px] border-[#4E4E4E]">
                            <p><?php echo bsc_html(bsc_value($faq, 'answer')); ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php') ?>
