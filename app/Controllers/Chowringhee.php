<?php

namespace App\Controllers;

class Chowringhee extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople Institute of Animation and Design in Chowringhee';
        $meta_keyword = '';
        $meta_description = 'Looking for VFX, 3d animation, graphics and web design courses in Chowringhee. Join Moople Institute, We provide 100% placement assistance. Contact us now for more information.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Chowringhee';
        
        return view('chowringhee',$data);
    }
}