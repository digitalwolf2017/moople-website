<?php

namespace App\Controllers;

class Call extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Book a Free Consultation Call | Moople Institute';
        $meta_keyword = 'Moople call, book consultation, career guidance call, free counseling session';
        $meta_description = 'Schedule a free consultation call with Moople experts to get career guidance, course details, and admission support. Start your journey with the right advice today.';

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('Call', $data);
    }
}
