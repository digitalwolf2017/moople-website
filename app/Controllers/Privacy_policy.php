<?php

namespace App\Controllers;

class Privacy_policy extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople - Privacy Policy and Disclaimer for Terms &amp; Conditions';
        $meta_keyword = '';
        $meta_description = 'Get details about your data security and policy we follow on data capture and payment portals.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('privacy_policy',$data);
    }
    
}