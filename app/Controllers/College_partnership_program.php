<?php

namespace App\Controllers;

class College_partnership_program extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Host Multiple Courses As A Moople Partner';
        $meta_keyword = '';
        $meta_description = '';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('college_partnership_program',$data);
    }
    
}