<?php

namespace App\Controllers;

class Nirman_vihar_delhi extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Animation and VFX Institute in Nirman Vihar Delhi - Moople';
        $meta_keyword = '';
        $meta_description = 'Join career oriented 3d animation, vfx, graphic designing and web designing courses in Nirman Vihar Delhi at our Moople Institute of Animation and Design. For more information call us directly.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Nirman Vihar Delhi';
        
        return view('nirman_vihar_delhi',$data);
    }
}