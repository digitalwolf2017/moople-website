<?php

namespace App\Controllers;

class Dunlop extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople Institute of Animation and Design in Dunlop';
        $meta_keyword = '';
        $meta_description = 'Join career oriented best animation course, vfx course, graphic designing and web designing courses in Dunlop at our Moople Institute of Animation and Design. For more information, contact us now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Dunlop';
        
        return view('dunlop',$data);
    }
}