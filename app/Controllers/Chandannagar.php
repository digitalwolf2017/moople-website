<?php

namespace App\Controllers;

class Chandannagar extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Animation and VFX Institute in Chandannagar - Moople';
        $meta_keyword = '';
        $meta_description = 'Join career oriented 3d animation, vfx, graphic designing and web designing courses in Chandannagar at our Moople Institute of Animation and Design. For more information, contact us.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Chandannagar';
        
        return view('chandannagar',$data);
    }
}