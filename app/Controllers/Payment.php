<?php

namespace App\Controllers;

class Payment extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Online Payment Section - Fast, Secure, and Convenient Transactions';
        $meta_keyword = '';
        $meta_description = 'Experience hassle-free online payments at Moople. Enjoy secure transactions, multiple payment options, and swift processing for a seamless learning experience.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('payment',$data);
    }
    
}