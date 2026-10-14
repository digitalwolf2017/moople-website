<?php

namespace App\Controllers;

class Vfx_course extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Learn VFX Course From The Best VFX Training Institute';
        $meta_keyword = '';
        $meta_description = 'Are you interested in VFX course? Join Moople, one of the best VFX training institutes near your location. For more information about the course, contact us';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);

        $data['courses'][0] = 'Visual Effects & AI';
        $data['courses'][1] = 'BSc in VFX Film Making';
        $data['courses'][2] = 'Motion Graphics, Video Editing & AI';
        
        $data['page_name'] = 'vfx-course';
        
        return view('vfx_course',$data);
    }
}
