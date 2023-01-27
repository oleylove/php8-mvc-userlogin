<?php

namespace App\Controllers;

use App\Controllers\Auth;
use App\Core\Controller;
use App\Core\Validator;

class Users extends Controller
{
    public $data = [];
    private $UserModel;

    public function __construct()
    {
        if (!Auth::isLogged()) {
            $this->redirect('welcome?logged=false');
        }
        $this->UserModel = $this->model('UserModel');
        $this->data = [
            'sidebarUsers' => 'active',
            'title' => 'Users',
            'page' => 'Users',
            'subpage' => '',
        ];
    }
    
    
    public function index()
    {
        $users = $this->UserModel->getAll();

        $this->data['users'] = $users;

        $this->view('users/index',$this->data);
         
    }


    
    public function show($id)
    {
        $user = $this->UserModel->getById($id);
        if ($user === false) {
            $this->redirect('errors/pagenotfound');
        } else {

            $this->data['subpage'] = ' | EN: '.$user['id'];
            $this->data['user'] = $user;

            $this->view('users/show',$this->data);
        }
         
    }


}
