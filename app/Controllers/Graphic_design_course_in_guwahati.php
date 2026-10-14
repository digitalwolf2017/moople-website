<?php

namespace App\Controllers;

class Graphic_design_course_in_guwahati extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Graphic Design Course in Guwahati | Graphic Design Training Guwahati';
        $meta_keyword = '';
        $meta_description = 'Learn graphic design with our graphic design course in Guwahati. We are the best graphic design institute in Guwahati with modest graphic design course fees.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Advanced Graphic Design & AI';
        $data['courses'][1] = 'Graphic Design & AI';
        
        $data['page_name'] = 'graphic-design-course-in-guwahati';
        
        return view('graphic_design_course_in_guwahati',$data);
    }
}