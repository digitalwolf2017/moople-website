<?php

namespace App\Controllers;

class Ui_ux_design_course extends BaseController
{
    public function index(): string
    {
        $meta_title = 'UI UX Design Course | Fees Starting From Rs. 48,000';
        $meta_keyword = '';
        $meta_description = 'Learn to create easy to use and visually appealing websites and applications by joining our UI UX design course';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'UI/UX Design & AI';
        $data['courses'][1] = 'Web Design & AI';
        
        $data['page_name'] = 'ui-ux-design-course';
        
        return view('ui_ux_design_course',$data);
    }
    
}