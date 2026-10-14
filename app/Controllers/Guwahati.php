<?php

namespace App\Controllers;

class Guwahati extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Learn Animation and Web Design From Moople in Guwahati';
        $meta_keyword = '';
        $meta_description = 'Find the best VFX, 3d animation, graphics and web design training institute in Guwahati for your professional course after 12th. For more information, contact us now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Guwahati';
        
        return view('guwahati',$data);
    }
}