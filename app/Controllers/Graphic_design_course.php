<?php

namespace App\Controllers;

class Graphic_design_course extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Graphic Design Course | Graphic Design Training Institute';
        $meta_keyword = '';
        $meta_description = 'Learn graphic design course to learn Photoshop, Illustrator, and InDesign skills. Create stunning visuals. We provide 100% job-ready course';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Advanced Graphic Design & AI';
        $data['courses'][1] = 'Graphic Design & AI';
        
        $data['page_name'] = 'graphic-design-course';
        
        return view('graphic_design_course',$data);
    }
}
