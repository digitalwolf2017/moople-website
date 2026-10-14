<?php

namespace App\Controllers;

class Bsc_multimedia_web_development extends BaseController
{
    public function index(): string
    {
        $meta_title = 'BSc in Multimedia, Design & Web Development | Moople';
        $meta_keyword = '';
        $meta_description = 'Learn multimedia design, UI/UX, animation, graphics and web development with Moople’s BSc course designed for creative and tech careers.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['noindex'] = true;
        $data['courses'][0] = 'BSc in Multimedia, Design & Web Development';
        // $data['courses'][1] = 'UI/UX Design & AI';
        
        $data['page_name'] = 'bsc-multimedia-web-development';
        
        return view('bsc_multimedia_web_development',$data);
    }
}