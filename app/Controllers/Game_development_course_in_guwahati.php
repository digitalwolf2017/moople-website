<?php

namespace App\Controllers;

class Game_development_course_in_guwahati extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Game Development Course | Game Design Course';
        $meta_keyword = '';
        $meta_description = 'Learn game development course from Moople, get trained from industry experts, 100% placement assistance, join now';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = '3D Gaming';

        $data['page_name'] = 'game-development-course-in-guwahati';
        
        return view('game_development_course_in_guwahati',$data);
    }
}