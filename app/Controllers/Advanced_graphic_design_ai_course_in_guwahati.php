<?php

namespace App\Controllers;

class Advanced_graphic_design_ai_course_in_guwahati extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Advanced Graphic Design & AI Course in Guwahati | Moople';
        $meta_keyword = '';
        $meta_description = 'Join Moople’s Advanced Graphic Design & AI Course in Guwahati. Learn graphic design, branding, Adobe tools, AI workflows, and build career-ready skills.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Advanced Graphic Design & AI';
        
        $data['page_name'] = 'advanced-graphic-design-ai-course-in-guwahati';
        
        return view('advanced_graphic_design_ai_course_in_guwahati',$data);
    }
}