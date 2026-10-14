<?php

namespace App\Controllers;

class Mecheda extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople Institute of Animation and Design in Mecheda';
        $meta_keyword = '';
        $meta_description = 'Join career oriented 3d animation, vfx, graphic designing and  web designing courses in mecheda at our animation Moople Institute. Contact us now for more information.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Mecheda';
        
        return view('mecheda',$data);
    }
}