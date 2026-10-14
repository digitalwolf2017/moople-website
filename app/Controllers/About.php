<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Know About Us - Moople Institute of Animation and Design';
        $meta_keyword = '';
        $meta_description = 'Moople is the pioneer in redefining the concept of multimedia education through its 15+ centres of excellence across India and still growing.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('about',$data);
    }
}
