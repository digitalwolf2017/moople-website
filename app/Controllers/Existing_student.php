<?php

namespace App\Controllers;

class Existing_student extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople existing students enquiry';
        $meta_keyword = '';
        $meta_description = 'Submit the form to make the online payment for Moople Institute canvas registration';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'existing-student';
        
        return view('existing_student',$data);
    }
}