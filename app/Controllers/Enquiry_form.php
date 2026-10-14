<?php

namespace App\Controllers;

class Enquiry_form extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople new students canvas enquiry form';
        $meta_keyword = '';
        $meta_description = 'Submit the form to make the online payment for Moople Institute canvas registration for new students';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'enquiry-form';
        
        return view('enquiry_form',$data);
    }
}