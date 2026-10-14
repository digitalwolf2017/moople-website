<?php

namespace App\Controllers;

class Bca_course extends BaseController
{
    public function index(): string
    {
        $meta_title = 'BCA Course at Moople | Build Your Tech Career Today';
        $meta_keyword = '';
        $meta_description = 'Start your BCA journey at Moople with hands-on learning, coding skills, and real projects. Build confidence and step into a successful IT career today.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['noindex'] = true;
        $data['courses'][0] = 'bca-course';
        // $data['courses'][1] = 'UI/UX Design & AI';
        
        $data['page_name'] = 'bca-course';
        
        return view('bca_course',$data);
    }
}