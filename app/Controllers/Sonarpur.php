<?php

namespace App\Controllers;

class Sonarpur extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople Institute of Animation and Design in Sonarpur';
        $meta_keyword = '';
        $meta_description = 'Looking for vfx, 3d animation, graphics and web design courses in sonarpur. Join Moople Institute in Kolkata. We provide 100% placement assistance. Contact now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Sonarpur';
        
        return view('sonarpur',$data);
    }
}