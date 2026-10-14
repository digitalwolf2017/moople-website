<?php

namespace App\Controllers;

class Thankyou extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Thank you for contacting Moople Institute of Animation &amp; Design';
        $meta_keyword = '';
        $meta_description = 'Thank you requesting information from Moople. Our Execuitive will connect with you shortly.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('thankyou',$data);
    }
}