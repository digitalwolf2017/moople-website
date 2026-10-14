<?php

namespace App\Controllers;

class Berhampore extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Top Rated Moople Institute of Animation and Design in Berhampore';
        $meta_keyword = '';
        $meta_description = 'Learn 3D design and animation, graphics and media design, web designing pro, visual effects for film and so more on from the reputed institute in Behrampore, then you should visit at Moople Institute today. Get to know more details, call us now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['page_name'] = 'Berhampore';
        
        return view('berhampore',$data);
    }
}