<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/animation-course', 'Animation_course::index');
$routes->get('/bsc-in-animation', 'Bsc_in_animation::index');
$routes->get('/animation-course-in-kolkata', 'Animation_course_in_kolkata::index');
$routes->get('/animation-course-in-guwahati', 'Animation_course_in_guwahati::index');
$routes->get('/2d-animation-course', 'D2_animation_course::index');
$routes->get('/vfx-course', 'Vfx_course::index');
$routes->get('/vfx-course-in-kolkata', 'Vfx_course_in_kolkata::index');
$routes->get('/bsc-in-vfx', 'Bsc_in_vfx::index');
$routes->get('/graphic-design-course', 'Graphic_design_course::index');
$routes->get('/web-design-course', 'Web_design_course::index');
$routes->get('/web-design-course-in-kolkata', 'Web_design_course_in_kolkata::index');
$routes->get('/web-design-course-in-guwahati', 'Web_design_course_in_guwahati::index');
$routes->get('/digital-marketing-course', 'Digital_marketing_course::index');
$routes->get('/digital-marketing-course-in-kolkata', 'Digital_marketing_course_in_kolkata::index');
$routes->get('/ui-ux-design-course', 'Ui_ux_design_course::index');
$routes->get('/graphic-design-and-ai', 'Graphic_design_and_ai::index');
$routes->get('/graphics-design-course-in-kolkata', 'Graphics_design_course_in_kolkata::index');
$routes->get('/graphic-design-course-in-guwahati', 'Graphic_design_course_in_guwahati::index');
$routes->get('/3d-modelling-course', 'D3_modelling_course::index');
$routes->get('/motion-graphic-video-editing-course', 'Motion_graphic_video_editing_course::index');
$routes->get('/bba-in-digital-marketing', 'Bba_in_digital_marketing::index');
$routes->get('/game-development-course', 'Game_development_course::index');
$routes->get('/bsc-multimedia-web-development', 'Bsc_multimedia_web_development::index');
$routes->get('/centres', 'Centres::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/payment', 'Payment::index');
$routes->get('/courses', 'Courses::index');
$routes->get('/career', 'Career::index');
$routes->get('/baguiati', 'Baguiati::index');
$routes->get('/barasat', 'Barasat::index');
$routes->get('/bardhaman', 'Bardhaman::index');
$routes->get('/berhampore', 'Berhampore::index');
$routes->get('/chandannagar', 'Chandannagar::index');
$routes->get('/chowringhee', 'Chowringhee::index');
$routes->get('/guwahati', 'Guwahati::index');
$routes->get('/jodhpurpark', 'Jodhpurpark::index');
$routes->get('/kudghat', 'Kudghat::index');
$routes->get('/mecheda', 'Mecheda::index');
$routes->get('/newalipore', 'Newalipore::index');
$routes->get('/sealdah', 'Sealdah::index');
$routes->get('/serampore', 'Serampore::index');
$routes->get('/siliguri', 'Siliguri::index');
$routes->get('/sonarpur', 'Sonarpur::index');
$routes->get('/thane', 'Thane::index');
$routes->get('/dunlop', 'Dunlop::index');
$routes->get('/nirman-vihar-delhi', 'Nirman_vihar_delhi::index');
$routes->get('/shyambazar', 'Shyambazar::index');
$routes->get('/midnapore', 'Midnapore::index');
$routes->get('/barrackpore', 'Barrackpore::index');
$routes->get('/demo', 'Demo::index');
$routes->get('/placement', 'Placement::index');
$routes->get('/awards', 'Awards::index');
$routes->get('/news-media', 'News_media::index');
$routes->get('/under-construction', 'Under_construction::index');
$routes->get('/privacy-policy', 'Privacy_policy::index');
$routes->get('/thankyou', 'Thankyou::index');
$routes->get('/new-student', 'Enquiry_form::index');
$routes->get('/existing-student', 'Existing_student::index');
$routes->get('/partner-with-moople', 'Partner_with_moople::index');
$routes->get('/production', 'Production::index');
$routes->get('/college-partnership-program', 'College_partnership_program::index');
$routes->get('/canvas-application', 'Canvas_application::index');
$routes->get('/bsc-canvas-application', 'Bsc_canvas_application::index');

//$routes->get('/uiux-design-ai-courses-in-guwahati', 'Uiux_design_ai_courses_in_guwahati::index');
$routes->get('/uiux-design-ai-courses-in-guwahati-backup20260517', 'Uiux_design_ai_courses_in_guwahati_backup20260517::index');

$routes->get('/advanced-graphic-design-ai-course-in-guwahati', 'Advanced_graphic_design_ai_course_in_guwahati::index');
$routes->get('/motion-graphics-video-editing-ai-course-in-guwahati', 'Motion_graphics_video_editing_ai_course_in_guwahati::index');
$routes->get('/game-development-course-in-guwahati', 'Game_development_course_in_guwahati::index');
$routes->get('/bsc-in-cyber-security', 'Bsc_in_cyber_security::index');
$routes->get('/photography-film-editing-course', 'Photography_film_editing_course::index');
$routes->get('/bca-course', 'Bca_course::index');
$routes->get('/download-brochure', 'Download_brochure::index');
$routes->get('/(:segment)', 'Dynamic_course_page::show/$1');
