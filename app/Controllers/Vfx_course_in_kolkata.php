<?php

namespace App\Controllers;

class Vfx_course_in_kolkata extends BaseController
{
    public function index(): string
    {
        $meta_title = 'VFX Course in Kolkata | VFX Training Institute In Kolkata';
        $meta_keyword = '';
        $meta_description = 'We offer professional VFX courses in Kolkata to give adequate VFX training with 100% job assistance. Get enrolled in our VFX courses to become job ready';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);

        $data['courses'][0] = 'Visual Effects & AI';
        $data['courses'][1] = 'BSc in VFX Film Making';
        $data['courses'][2] = 'Motion Graphics, Video Editing & AI';
        
        $data['page_name'] = 'vfx-course-in-kolkata';
        
        return view('vfx_course_in_kolkata',$data);
    }
}
