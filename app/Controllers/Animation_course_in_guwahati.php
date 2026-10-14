<?php

namespace App\Controllers;

class animation_course_in_guwahati extends BaseController
{
    public function index(): string
    {

        $meta_title = 'Animation Course in Guwahati | Animation Institute In Guwahati';
        $meta_keyword = '';
        $meta_description = 'Moople, The Best Animation Institute in Guwahati offers professional 2D and 3D animation courses in Guwahati to help you get quality training for your bright career. Enroll now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);

        $data['courses'][0] = 'Advanced 3D Animation & AI';
        $data['courses'][1] = 'BSc in Animation Film Making';
        $data['courses'][2] = '2D Animation & AI';
        $data['courses'][3] = '3D Modelling & AI';
        
        $data['page_name'] = 'animation-course-in-guwahati';
        
        return view('animation_course_in_guwahati',$data);
    }
}