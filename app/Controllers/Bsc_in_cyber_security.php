<?php

namespace App\Controllers;

class Bsc_in_cyber_security extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Pursue BSc in Cyber Security| Join Moople Academy';
        $meta_keyword = '';
        $meta_description = 'Cybercrime has become a major issue nowadays. Learn cybersecurity to secure your accounts and help others, too. Join Moople now for a degree in Cyber Security.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['noindex'] = true;
        $data['courses'][0] = 'BSc in Cyber Security';
        // $data['courses'][1] = 'UI/UX Design & AI';
        
        $data['page_name'] = 'bsc-in-cyber-security';
        
        return view('bsc_in_cyber_security',$data);
    }
}