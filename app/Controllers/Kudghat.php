<?php

namespace App\Controllers;

class Kudghat extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Find The Best Animation and Design Institute in Kudghat - Moople';
        $meta_keyword = '';
        $meta_description = 'Learn 3d animation, vfx, graphics and web design courses from the reputed training institute in Kudghat. For more information about the courses and placement details, contact us now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Kudghat';
        
        return view('kudghat',$data);
    }
}