<?php

namespace App\Controllers;

class Jodhpurpark extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople Institute of Animation and Design in Jodhpur Park';
        $meta_keyword = '';
        $meta_description = 'Build your career in 3d animation, VFX, graphics and web design courses with Moople Institute in Jodhpur Park, Kolkata offering 100% placement assistance. Contact us now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Jodhpur park';
        
        return view('jodhpurpark',$data);
    }
}