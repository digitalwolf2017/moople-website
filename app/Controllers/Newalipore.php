<?php

namespace App\Controllers;

class Newalipore extends BaseController
{
    public function index(): string
    {

        $meta_title = 'Get The Best Animation and Web Design Institute in New Alipore - Moople';
        $meta_keyword = '';
        $meta_description = 'Join Moople Institute in New Alipore for 3d animation, vfx, graphics and web design courses. We provide 100% placement to students right on the date of admission. Contact us now for more details.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'New Alipore';
        
        return view('newalipore',$data);
    }
}