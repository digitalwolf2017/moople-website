<?php

namespace App\Controllers;

class Barasat extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Learn Animation and Web Design From Moople in Barasat';
        $meta_keyword = '';
        $meta_description = 'If you are looking for the best vfx, 3d animation, graphics and web design training institute in Barasat for your professional course after 12th. Contact Moople.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['page_name'] = 'Barasat';
        
        return view('barasat',$data);
    }
}
