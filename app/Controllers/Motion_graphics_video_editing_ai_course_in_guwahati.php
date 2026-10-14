<?php

namespace App\Controllers;

class Motion_graphics_video_editing_ai_course_in_guwahati extends BaseController
{
    public function index(): string
    {

        $meta_title = 'Motion Graphics & Video Editing Course in Guwahati | Moople';
        $meta_keyword = '';
        $meta_description = 'Learn Motion Graphics, Video Editing & AI in Guwahati with Moople. Master After Effects, Premiere Pro, AI tools and hands-on production skills.';
  
        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Motion Graphics, Video Editing & AI';
        
        $data['page_name'] = 'motion-graphics-video-editing-ai-course-in-guwahati';
        
        return view('motion_graphics_video_editing_ai_course_in_guwahati',$data);
    }
    
}