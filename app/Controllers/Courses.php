<?php

namespace App\Controllers;

class Courses extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Courses Offers  by Moople - Contact Now';
        $meta_keyword = '';
        $meta_description = 'Moople Offers various courses like Animation, VFX, Graphics, We Design & Digital Marketing, contact us for more information';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('courses',$data);
    }
}