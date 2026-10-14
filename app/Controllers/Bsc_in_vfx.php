<?php

namespace App\Controllers;

class Bsc_in_vfx extends BaseController
{
    public function index(): string
    {
        $meta_title = 'BSc In VFX Course | 4 Years Degree Course In VFX';
        $meta_keyword = '';
        $meta_description = 'Learn BSc in VFX course from the best VFX training institute - Moople. Degree affiliated to MAKAUT, learn from industry experts';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['courses'][0] = 'BSc in VFX Film Making';
        $data['courses'][1] = 'Visual Effects & AI';
        $data['courses'][2] = 'Motion Graphics, Video Editing & AI';
        
        $data['page_name'] = 'bsc-in-vfx';

        return view('bsc_in_vfx',$data);
    }
}
