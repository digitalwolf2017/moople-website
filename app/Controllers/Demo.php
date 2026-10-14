<?php

namespace App\Controllers;

class Demo extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople - One Of The Best Institutes of Animation and Design';
        $meta_keyword = '';
        $meta_description = 'Join career oriented 3d animation courses, vfx courses, graphic designing courses, web designing courses in Kolkata at our animation institute in Kolkata.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('demo',$data);
    }
}