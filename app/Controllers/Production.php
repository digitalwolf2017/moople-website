<?php

namespace App\Controllers;

class Production extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople - Production';
        $meta_keyword = '';
        $meta_description = 'Production';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('production',$data);
    }
    
}