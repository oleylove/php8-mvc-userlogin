<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Controllers\Auth;

class Welcome extends Controller
{

    private $data = [];
    
    public function __construct()
    {
        $this->data = [
            'title' => 'Welcome',
            'page' => 'Welcome',
            'subpage' => '',
        ];
    }
    
    public function index()
    {
        $this->view('welcome/index',$this->data);
    }

    public function aboutus()
    {
        $data = [
            'title' => 'About Us',
            'page' => 'About Us',
            'subpage' => '',
        ];
        $this->view('welcome/about-us',$data);
    }

    public function nucleoicon()
    {
        $data = [
            'title' => 'Nucleo Icon',
            'page' => 'Nucleo Icon',
            'subpage' => '',
        ];
        $this->view('nucleo-icon',$data);
    }


}
