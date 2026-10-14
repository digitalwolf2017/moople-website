<?php

namespace App\Controllers;

class Centres extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople centers for animation, vfx, web, graphic & digital marketing course.';
        $meta_keyword = '';
        $meta_description = 'Our centers are located at different locations that aim to provide the comprehensive range of programs to suit individual interests and career aspirations.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('centres',$data);
    }
}