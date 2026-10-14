<?php

namespace App\Controllers;

class Download_brochure extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Digital Marketing Course In Kolkata | Digital Marketing Training Kolkata';
        $meta_keyword = '';
        $meta_description = 'Enhance your digital skills with an advanced digital marketing course in Kolkata with placement, certification and affordable fees. Get to know more details, contact Moople now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);

        $data['page_name'] = 'download-brochure';
        
        return view('download_brochure',$data);
    }
}
