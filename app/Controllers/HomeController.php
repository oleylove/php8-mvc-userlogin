<?php

namespace App\Controllers;


class HomeController{
   
    public function __construct()
    {

    }
    

    public function index() {
        return view('welcome', [
            'home' => 'HomeController'
        ]);
    }


}
