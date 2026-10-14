<?php

namespace App\Controllers;

class Motion_graphic_video_editing_course extends BaseController
{
    public function index(): string
    {

        $meta_title = 'Motion Graphics Course | Video Editing Course With AI';
        $meta_keyword = '';
        $meta_description = 'Learn motion graphics course and video editing course from the best institute - Moople. get trained by industry experts, join now';
  
        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Motion Graphics, Video Editing & AI';
        $data['courses'][1] = 'BSc in VFX Film Making';
        $data['courses'][2] = 'Visual Effects & AI';
        
        $data['page_name'] = 'motion-graphic-video-editing-course';
        
        return view('motion_graphic_video_editing_course',$data);
    }
    
}