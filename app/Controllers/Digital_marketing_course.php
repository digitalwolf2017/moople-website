<?php

namespace App\Controllers;

class Digital_marketing_course extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Learn Digital Marketing Course At Moople | Best Digital Marketing Institute';
        $meta_keyword = '';
        $meta_description = 'Join our comprehensive digital marketing course, covering Facebook Ads, SEO, Google Ads, Social Media and more. Enroll in our marketing classes to boost your skills today!';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        $data['courses'][0] = 'Digital Marketing & AI';

        $data['page_name'] = 'digital-marketing-course';
        
        return view('digital_marketing_course',$data);
    }
}
