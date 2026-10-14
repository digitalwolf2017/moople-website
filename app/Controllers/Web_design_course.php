<?php

namespace App\Controllers;

class Web_design_course extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Learn Web Design Course | Web Development Training';
        $meta_keyword = '';
        $meta_description = 'Enrol in our web design course and get trained by industry experts. Learn full-stack website development, join now';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Web Design & AI';
        $data['courses'][1] = 'UI/UX Design & AI';
        
        $data['page_name'] = 'web-design-course';
        
        return view('web_design_course',$data);
    }
}
