<?php

namespace App\Controllers;

class Awards extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Awards And Recognition in Moople Institute';
        $meta_keyword = '';
        $meta_description = 'Moople Institute has received many awards in 2024 for the “Best Institute of Placement by AVGC and Best Animation Institution by ASSOCHAM.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('awards',$data);
    }
}