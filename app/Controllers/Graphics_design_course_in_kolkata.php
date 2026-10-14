<?php

namespace App\Controllers;

class Graphics_design_course_in_kolkata extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Graphic Design Course in Kolkata | Graphic Design Training Kolkata';
        $meta_keyword = '';
        $meta_description = 'Learn graphic design with our graphic design course in Kolkata. We are the best graphic design institute in Kolkata with modest graphic design course fees.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Advanced Graphic Design & AI';
        $data['courses'][1] = 'Graphic Design & AI';
        
        $data['page_name'] = 'graphics-design-course-in-kolkata';
        
        return view('graphics_design_course_in_kolkata',$data);
    }
}