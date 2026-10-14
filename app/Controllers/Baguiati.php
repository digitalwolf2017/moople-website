<?php

namespace App\Controllers;

class Baguiati extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Learn Animation and Web Design From Moople in Baguiati';
        $meta_keyword = '';
        $meta_description = 'Find the best vfx, 3d animation, graphics and web design training institute in Baguiati for your professional course after 12th. Contact Moople.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['page_name'] = 'Baguiati';
        
        return view('baguiati',$data);
    }
}
