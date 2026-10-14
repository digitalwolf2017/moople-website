<?php

namespace App\Controllers;

class Thane extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople Institute of Animation and Design in Thane, Mumbai';
        $meta_keyword = '';
        $meta_description = 'Build your career in animation, vfx, graphics and web design courses with Moople Institute in Thane, Mumbai, We offer 100% placement assistance. Visit to know more.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Thane';
        
        return view('thane',$data);
    }
}