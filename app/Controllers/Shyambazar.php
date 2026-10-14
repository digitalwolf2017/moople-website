<?php

namespace App\Controllers;

class Shyambazar extends BaseController
{
    public function index(): string
    {

        $meta_title = 'Best Institute of Animation and Design - Moople Shyambazar';
        $meta_keyword = '';
        $meta_description = 'Join career oriented certificate courses in 3d animation, vfx, graphic designing, and web designing. We can provide the best multimedia courses in Shyambazar. For more information, contact us now.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['page_name'] = 'Shyambazar';
        
        return view('shyambazar',$data);
    }
}