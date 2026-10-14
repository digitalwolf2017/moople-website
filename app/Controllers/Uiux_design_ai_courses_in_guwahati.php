<?php

namespace App\Controllers;

use App\Models\DynamicCoursePageModel;

class Uiux_design_ai_courses_in_guwahati extends BaseController
{
    public function index(): string
    {
        $slug = service('uri')->getSegment(1);
        $page = null;

        try {
            $page = (new DynamicCoursePageModel())->getActivePageBySlug($slug);
        } catch (\Throwable $e) {
            log_message('error', 'Dynamic course page lookup failed for '.$slug.': '.$e->getMessage());
        }

        $meta_title = $page['meta_title'] ?? 'UI UX Design Course | Fees Starting From Rs. 48,000';
        $meta_keyword = '';
        $meta_description = $page['meta_description'] ?? 'Learn to create easy to use and visually appealing websites and applications by joining our UI UX design course';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = $slug;
        
        $data['courses'][0] = $page['course_name'] ?? 'UI/UX Design & AI';
        
        $data['page_name'] = $slug;

        if ($page) {
            $data['dynamic_course_page'] = $page;
            $data['dynamic_course_name'] = $page['course_name'];
            $data['dynamic_location'] = $page['location'];
            $data['dynamic_heading'] = $page['course_name'].' Courses in '.$page['location'];
            $data['dynamic_banner_heading'] = $page['course_name'].' Course';
            $data['dynamic_subheading'] = 'Best Institute for '.$page['course_name'].' Course';
            $data['dynamic_body_content'] = $page['body_content'];
        }
        
        return view('template_uiux_design_ai_course',$data);
    }
    
}
