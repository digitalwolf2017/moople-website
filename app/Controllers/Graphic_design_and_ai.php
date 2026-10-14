<?php

namespace App\Controllers;

class Graphic_design_and_ai extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Graphic Design Course with AI | Course Fees Starting From Rs. 42,000';
        $meta_keyword = '';
        $meta_description = 'Learn a certification course in graphic design with AI from the best training institute Moople. We provide 100% placement assistance. Enroll today!';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Graphic Design & AI';
        $data['courses'][1] = 'Advanced Graphic Design & AI';
        
        $data['page_name'] = 'graphic-design-and-ai';
        
        return view('graphic_design_and_ai',$data);
    }
    
}