<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Validator;
use App\Core\Upload;

class Auth extends Controller
{
    public function __construct()
    {        
        $this->UserModel = $this->model('UserModel');
       
    }

    public static function isLogged(){
        if(isset($_SESSION['id'])){
            return true;
        }else{
            return false;
        }
    }

    public function unsetSession(){
        unset($_SESSION['id']);
        unset($_SESSION['fullName']);
        unset($_SESSION['email']);
        unset($_SESSION['photo']);
        unset($_SESSION['role']);
        unset($_SESSION['login']);
        session_destroy();
    }

    public function setSession($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['fullName'] = $user['firstname']." ".$user['lastname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['photo'] = $user['photo']; 
        $_SESSION['role'] = $user['role']; 
    }

    public function signin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $username = Validator::input($_POST['username']);
            $password = Validator::input($_POST['password']);

            $user = $this->UserModel->login($username,$password);
            if ($user === false) {
                $_SESSION['login'] = false; 
                $data = [
                    'title' => NAME.' | Welcome'
                ];
                $this->redirect('welcome?login=failed');
            } else {
                $this->setSession($user);
                $this->redirect('dashboard');
            }
            
        }else{
            echo '<script type="text/javascript">alert("NOT REQUEST METHOD POST");</script>';
            $this->redirect('welcome');
        }
    }

    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 

            //check for id
            if($this->UserModel->findById(Validator::input($_POST['id']))){
                echo 'EN: ' .Validator::input($_POST['id']). ' already exist';
                exit;
            }
            //check for email
            if($this->UserModel->findByEmail(Validator::input($_POST['email']))){
                echo 'Email: ' .Validator::input($_POST['email']). ' already exist';
                exit;
            }

            //validate confirm password
            if($_POST['password'] != $_POST['confirm_password'])
            {
                echo 'Password does not match';
                exit;
            }


            $upload = [];
            if ($_FILES['photo']['name']) {
                $upload['name']  = $_FILES['photo']['name'] ;
                $upload['temp']  = $_FILES['photo']['tmp_name'];
                $upload['newName']  = Validator::input($_POST['id']);
            }else{
                $upload['name'] = '' ;
                $upload['temp'] = '';
                $upload['newName']  = '';
            }

            $data = [
                'id' => Validator::input($_POST['id']),
                'name' => Validator::input($_POST['name']),
                'surname' => Validator::input($_POST['surname']),
                'email' => Validator::input($_POST['email']),
                'position' => Validator::input($_POST['position']),
                'phone' => Validator::input($_POST['phone']),
                'ext' => Validator::input($_POST['ext']),
                'shortcut' => Validator::input($_POST['shortcut']),
                'photo' => Upload::register($upload),
                'role' => 'guest',
                'create_at' => date("Y-m-d H:i:s"),
                'update_at' => date("Y-m-d H:i:s"),
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ];

            // check register
            if($this->UserModel->register($data)){
                echo('success');
            }else {
                echo('Registration failed');
            }

        }else{
            echo ('NOT REQUEST METHOD POST');
           
        }
    }

    public function login()
    {
        $data = [
            'title' => NAME . ' | login'
        ];
        $this->view('auth/login',$data);
    }

    public function logout(){
        $this->unsetSession();
        $this->redirect('');
    }

    public function changePassword(){
		try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
                $data = [
                    'id' => $_SESSION['id'],
                    'old_password' => $_POST['old_password'],
                    'new_password' => $_POST['new_password'],
                    'confirm_password' => $_POST['confirm_password'],
                ];

                //validate confirm password
                if ($data['new_password'] != $data['confirm_password']) {
                    echo 'New password does not match Confirm password.';
                    exit;    
                }

                $user = $this->UserModel->getByid($data['id']);
                if ($user) {
                    //check old password
                    if (password_verify($data['old_password'], $user['password'])) {

                        $hash_new_password = password_hash($data['new_password'], PASSWORD_DEFAULT);
                        if ($this->UserModel->changePassword($data['id'],$hash_new_password)) {
                            $this->unsetSession();
                            echo 'success';
                        } else {
                            echo 'Failed to change password';
                        } 
                    } else {
                       echo 'Old passwords don not match.';
                       exit;
                    }
                }else{
                    echo 'Can not find this EN : ' . $data['id'];
                    exit;
                }


            }else {
                echo ('NOT REQUEST METHOD POST');
            }
		} catch(PDOException $e) {
			$status = false;
			echo json_encode($status);
		}
	}














    
}
