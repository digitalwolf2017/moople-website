<?php

namespace App\Controllers;

class Partner_with_moople extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Become a Creative Franchise Partner with Moople';
        $meta_keyword = '';
        $meta_description = '';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('partner_with_moople',$data);
    }
    
}