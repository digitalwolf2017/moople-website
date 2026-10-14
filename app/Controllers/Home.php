<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Moople | Institute of Animation and Design';
        $meta_keyword = '';
        $meta_description = 'Join Moople. One of the best Animation, VFX, Graphics, Web Design & Digital Marketing training Institute with 100% placement support, contact us.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_name'] = '';
        
        $data['courses'][0] = 'BSc in Animation Film Making';
        $data['courses'][1] = 'Advanced 3D Animation & AI';
        $data['courses'][2] = '2D Animation & AI';
        $data['courses'][3] = '3D Modelling & AI';
        $data['courses'][4] = 'BSc in VFX Film Making';
        $data['courses'][5] = 'Visual Effects & AI';
        $data['courses'][6] = 'Motion Graphics, Video Editing & AI';
        $data['courses'][7] = 'Advanced Graphic Design & AI';
        $data['courses'][8] = 'Graphic Design and AI';
        $data['courses'][9] = 'Web Design & AI';
        $data['courses'][10] = 'UI/UX Design & AI';
        $data['courses'][11] = 'Digital Marketing & AI';
        $data['courses'][12] = 'BBA in Digital Marketing';
        $data['courses'][13] = '3D Gaming';
        
        $data['page_name'] = '';
        
        return view('home',$data);
    }
    
}
