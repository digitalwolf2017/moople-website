<?php

namespace App\Controllers;

class Web_design_course_in_guwahati extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Best Web Design and Web Development Courses In Guwahati';
        $meta_keyword = '';
        $meta_description = 'Secure your career with Moople. Learn web designing and web development courses in Guwahati, We provide 100% job-ready course in web design and development. Apply Now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Web Design & AI';
        $data['courses'][1] = 'UI/UX Design & AI';
        
        $data['page_name'] = 'web-design-course-in-guwahati';
        
        return view('web_design_course_in_guwahati',$data);
    }
}