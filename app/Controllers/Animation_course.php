<?php

namespace App\Controllers;

class Animation_course extends BaseController
{
    public function index(): string
    {
        
        $meta_title = 'Animation Course | Best Animation Institute';
        $meta_keyword = '';
        $meta_description = 'Start your journey to become an animator, Learn 3D Animation course from Moople, one of the best animation institutes with 100% placement assistance';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Advanced 3D Animation & AI';
        $data['courses'][1] = 'BSc in Animation Film Making';
        $data['courses'][2] = '2D Animation & AI';
        $data['courses'][3] = '3D Modelling & AI';
        
        $data['page_name'] = 'animation-course';

        return view('animation_course',$data);
    }
}
