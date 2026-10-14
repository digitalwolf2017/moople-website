<?php

namespace App\Controllers;

class Career extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Start Your Career With Moople, There Are Various Job Opportunities';
        $meta_keyword = '';
        $meta_description = 'Find your job role & just submit your CV, We will contact you ASAP.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('career',$data);
    }
}