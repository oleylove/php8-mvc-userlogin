<?php

namespace App\Controllers;

use App\Core\Controller;



class Errors extends Controller
{
    public function __construct()
    {        

    }

    public function pagenotfound(){
        $data = [
            'title' => NAME . ' | Page not found'
        ];
        $this->view('errors/404',$data);
    }


}
