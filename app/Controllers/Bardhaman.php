<?php

namespace App\Controllers;

class Bardhaman extends BaseController
{
    public function index(): string
    {

        $meta_title = 'Moople Institute of Animation and Design in Bardhaman';
        $meta_keyword = '';
        $meta_description = 'Build your career in 3d animation, vfx, graphics and web design courses with Moople Institute in Bardhaman offering 100% placement assistance.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['page_name'] = 'Bardhaman';
        
        return view('bardhaman',$data);
    }
}