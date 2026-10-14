<?php

namespace App\Controllers;

class Serampore extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Best Animation and Design Institute in Serampore - Moople';
        $meta_keyword = '';
        $meta_description = 'Join career oriented 3d animation, vfx, graphic designing and web designing courses in Serampore at our  training Institute in Kolkata Moople. Contact now for more information.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Serampore';
        
        return view('serampore',$data);
    }
}