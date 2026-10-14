<?php

namespace App\Controllers;

class Bsc_in_animation extends BaseController
{
    public function index(): string
    {
        $meta_title = 'BSc In Animation Course | 4 Years Degree Course In Animation';
        $meta_keyword = '';
        $meta_description = "Learn BSc in Animation filmmaking course from Moople, Degree affiliated to MAKAUT, get 100% placement assistance, learn from industry experts.";
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['courses'][0] = 'BSc in Animation Film Making';
        $data['courses'][1] = 'Advanced 3D Animation & AI';
        $data['courses'][2] = '2D Animation & AI';
        $data['courses'][3] = '3D Modelling & AI';
        
        $data['page_name'] = 'bsc-in-animation';
        
        return view('bsc_in_animation',$data);
    }
}