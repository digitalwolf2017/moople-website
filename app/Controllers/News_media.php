<?php

namespace App\Controllers;

class News_media extends BaseController
{
    public function index(): string
    {

        $meta_title = 'News And Media Publication in Moople Institute';
        $meta_keyword = '';
        $meta_description = 'Moople Institute of Animation and Design has been in news for several projects and achievements. Visit to know more details about our institute.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('news_media',$data);
    }
}