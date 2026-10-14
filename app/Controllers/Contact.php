<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Any Query About Admission Process or Course Fees? Contact Moople';
        $meta_keyword = '';
        $meta_description = 'Just send us your query or directly call us. We will be happy to help you as soon as possible.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('contact',$data);
    }
}