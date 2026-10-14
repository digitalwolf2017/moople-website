<?php

namespace App\Controllers;

class D2_animation_course extends BaseController
{
    public function index(): string
    {
        $meta_title = '2D Animation Course | 2D Animation Training Institute';
        $meta_keyword = '';
        $meta_description = 'Join a 2D Animation course from the best 2D Animation training institute Moople with 100% placement assistance. For more information visit our official website.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = '2D Animation & AI';
        $data['courses'][1] = 'BSc in Animation Film Making';
        $data['courses'][2] = 'Advanced 3D Animation & AI';
        $data['courses'][3] = '3D Modelling & AI';
        
        $data['page_name'] = '2d-animation-course';

        
        return view('2d_animation_course',$data);
    }
}
