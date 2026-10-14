<?php

namespace App\Controllers;

class Bsc_canvas_application extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Bsc Canvas Application';
        $meta_keyword = '';
        $meta_description = '';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('bsc_canvas_application',$data);
    }
    
}