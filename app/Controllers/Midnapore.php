<?php

namespace App\Controllers;

class Midnapore extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Animation and VFX Institute in Midnapore - Moople';
        $meta_keyword = '';
        $meta_description = 'Join career oriented 3d animation, vfx, graphic designing and web designing courses in Midnapore at our Moople Institute of Animation and Design. Contact us now for more details.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Midnapore';
        
        return view('midnapore',$data);
    }
}