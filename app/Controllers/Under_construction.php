<?php

namespace App\Controllers;

class Under_construction extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Under Construction';
        $meta_keyword = '';
        $meta_description = '';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('under_construction',$data);
    }
}