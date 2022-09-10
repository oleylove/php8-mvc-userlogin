<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Controllers\Auth;


class Dashboard extends Controller
{

    public $data = [];
    
    public function __construct()
    {
        if (!Auth::isLogged()) {
            $this->redirect('welcome?logged=false');
        }
        $this->data = [
            'sidebarDashboard' => 'active',
            'title' => 'Dashboard',
            'page' => 'Dashboard',
            'subpage' => '',
        ];
    }
    
    public function index()
    {
        $this->view('dashboard/index',$this->data);
        
    }

    
}
