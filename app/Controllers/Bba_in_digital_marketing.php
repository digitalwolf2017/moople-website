<?php

namespace App\Controllers;

class Bba_in_digital_marketing extends BaseController
{
    public function index(): string
    {

        $meta_title = 'BBA in Digital Marketing Course | Top Digital Marketing Degree Program';
        $meta_keyword = '';
        $meta_description = 'Enroll in BBA in Digital Marketing and build a successful career in SEO, social media, and online branding. Industry-focused curriculum with placement support.';
    
        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'BBA in Digital Marketing';

        $data['page_name'] = 'bba-in-digital-marketing';
        
        return view('bba_in_digital_marketing',$data);
    }
}