<?php

namespace App\Controllers;

class D3_modelling_course extends BaseController
{
    public function index(): string
    {
        $meta_title = '3D Modeling Course with AI | Course Fees Starting Rs. 42,000';
        $meta_keyword = '';
        $meta_description = 'Learn 3D modeling course from the best institute Moople! Master key software and techniques to create stunning 3D models for games, animation, and design.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = '3D Modelling & AI';
        $data['courses'][1] = 'BSc in Animation Film Making';
        $data['courses'][2] = 'Advanced 3D Animation & AI';
        $data['courses'][3] = '2D Animation & AI';
        
        $data['page_name'] = '3d-modelling-course';

        
        return view('3d_modelling_course',$data);
    }
    
}