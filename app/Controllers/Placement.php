<?php

namespace App\Controllers;

class Placement extends BaseController
{
    public function index(): string
    {
        $meta_title = '100% Placement Assistance at Moople Academy';
        $meta_keyword = '';
        $meta_description = 'Moople offers 100% placement assistance for B.Sc. in 3d animation, vfx, graphics and web designing job in Kolkata. Visit to know about of Moople placement.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('placement',$data);
    }
    
}