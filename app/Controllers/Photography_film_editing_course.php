<?php

namespace App\Controllers;

class Photography_film_editing_course extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Photography & Film Editing Certificate Course | Moople';
        $meta_keyword = '';
        $meta_description = 'Learn photography, cinematography, DSLR shooting and film editing with Moople’s practical certificate course for creative media careers.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        $data['noindex'] = true;
        $data['courses'][0] = 'BSc in Cyber Security';
        // $data['courses'][1] = 'UI/UX Design & AI';
        
        $data['page_name'] = 'photography-film-editing-course';
        
        return view('photography_film_editing_course',$data);
    }
}