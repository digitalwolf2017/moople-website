<?php

namespace App\Controllers;

use App\Models\DynamicCoursePageModel;

class Dynamic_course_page extends BaseController
{
    private function getCoursesByTemplate(string $templateKey, string $courseName): array
    {
        $degreeCourses = [
            'Bachelor of Computer Application',
            'BSC in Cyber Security',
            'BSC in Multimedia, Design and Web Development',
            'BSc in Animation Film Making',
            'BSc in VFX Film Making',
        ];

        $certificateCourses = [
            'Advanced 3D Animation & AI',
            '2D Animation & AI',
            '3D Modelling & AI',
            'Visual Effects & AI',
            'Motion Graphics, Video Editing & AI',
            'Advanced Graphic Design & AI',
            'Graphic Design and AI',
            'Web Design & AI',
            'UI/UX Design & AI',
            'Digital Marketing & AI',
            '3D Gaming',
        ];

        $templateCourses = [
            'template_bachelor_of_computer_application' => $degreeCourses,
            'template_bba_in_digital_marketing' => $degreeCourses,
            'template_bsc_degree_course' => $degreeCourses,
            'template_bsc_degree_course_no_fee' => $degreeCourses,
            'template_bsc_in_animation_course' => $degreeCourses,
            'template_bsc_in_cyber_security' => $degreeCourses,
            'template_bsc_in_multimedia_design_and_web_development' => $degreeCourses,
            'template_bsc_in_vfx_film_making' => $degreeCourses,
            'template_2d_animation_and_ai' => $certificateCourses,
            'template_3d_gaming' => $certificateCourses,
            'template_3d_modeling_and_ai' => $certificateCourses,
            'template_advanced_3d_animation_and_ai' => $certificateCourses,
            'template_advanced_graphic_design_and_ai' => $certificateCourses,
            'template_certificate_course' => $certificateCourses,
            'template_digital_marketing_and_ai' => $certificateCourses,
            'template_graphic_design_and_ai' => $certificateCourses,
            'template_motion_graphics_video_editing_and_ai' => $certificateCourses,
            'template_uiux_design_ai_course' => $certificateCourses,
            'template_visual_effects_and_ai' => $certificateCourses,
            'template_web_design_and_ai' => $certificateCourses,
            'template_with_below_form' => $certificateCourses,
            'template_with_rightside_form' => $certificateCourses,
        ];

        return $templateCourses[$templateKey] ?? [$courseName];
    }

    public function show(string $slug)
    {
        try {
            $model = new DynamicCoursePageModel();
            $page = $model->getActivePageBySlug($slug);
        } catch (\Throwable $e) {
            log_message('error', 'Dynamic course page lookup failed for '.$slug.': '.$e->getMessage());
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if (!$page) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $templateKey = isset($page['template_key']) ? trim($page['template_key']) : '';
        if (!preg_match('/^[a-z0-9_]+$/', $templateKey)) {
            log_message('error', 'Invalid dynamic course template key: '.$templateKey);
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $templatePath = APPPATH.'Views/'.$templateKey.'.php';
        if (!is_file($templatePath)) {
            log_message('error', 'Dynamic course template not found: '.$templatePath);
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $courseName = $page['course_name'];
        $location = $page['location'];
        $courses = $this->getCoursesByTemplate($templateKey, $courseName);
        $sections = $model->getPageSections((int) $page['id']);
        $indexDirective = (isset($page['search_engine_indexing']) && strtoupper(trim($page['search_engine_indexing'])) === 'OFF') ? 'noindex' : 'index';
        $crawlDirective = (isset($page['search_engine_crawling']) && strtoupper(trim($page['search_engine_crawling'])) === 'OFF') ? 'nofollow' : 'follow';
        $dynamicRobotsMeta = $indexDirective . ',' . $crawlDirective;

        $data = [
            'meta_title' => $page['meta_title'],
            'meta_keyword' => '',
            'meta_description' => $page['meta_description'],
            'page_uri' => $page['slug'],
            'page_name' => $page['slug'],
            'is_dynamic_course_page' => true,
            'courses' => $courses,
            'dynamic_course_page' => $page,
            'dynamic_course_name' => $courseName,
            'dynamic_location' => $location,
            'dynamic_heading' => $courseName . ' Courses in ' . $location,
            'dynamic_banner_heading' => $courseName . ' Course',
            'dynamic_subheading' => 'Best Institute for ' . $courseName . ' Course',
            'dynamic_body_content' => $page['body_content'] ?? '',
            'dynamic_schema_json' => $page['schema_json'] ?? '',
            'dynamic_robots_meta' => $dynamicRobotsMeta,
            'dynamic_course_sections' => $sections,
        ];

        return view($templateKey, $data);
    }
}
