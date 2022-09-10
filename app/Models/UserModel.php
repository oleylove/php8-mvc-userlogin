<?php
namespace App\Models;

use App\Core\Model;

class UserModel{

    //private $pdo;
	private $db;
	private $tblusr = 'users';

    public function __construct(){
        $this->pdo = new Model;
		
    }

	public function getAll()
	{
		$sql = "SELECT * FROM users";
		$this->pdo->query($sql);
		return $this->pdo->fetchAll();
	}


	public function getById($id)
	{
		$sql = "SELECT * FROM users WHERE id = :id";
		$this->pdo->query($sql);
		$this->pdo->bind(':id', $id);
		return $this->pdo->fetch();
	}


	public function login($username,$password)
	{
		$sql = "SELECT * FROM users WHERE id = :id OR email = :email";
		$this->pdo->query($sql);
		$this->pdo->bind(':id', $username);
		$this->pdo->bind(':email', $username);
		$result = $this->pdo->fetch();
		
        if(password_verify($password, $result['password'])){
            return $result;
        }else{
            return false;
        }
	}
	//find user by email
	public function findByEmail($email){
		$sql = "SELECT email FROM users WHERE email = :email";
		$this->pdo->query($sql);
		$this->pdo->bind(':email', $email);
		$this->pdo->fetch();
		if($this->pdo->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}
	//find user by email
	public function findById($id){
		$sql = "SELECT id FROM users WHERE id = :id";
		$this->pdo->query($sql);
		$this->pdo->bind(':id', $id);
		$this->pdo->fetch();
		if($this->pdo->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}
	//register new user
	public function register($data){
		$sql = "INSERT INTO users";
		$sql .= "(id, firstname, lastname, email, position, password, phone, ext, shortcut, photo, role, create_at, update_at)VALUES";
		$sql .=	"(:id, :firstname, :lastname, :email, :position, :password, :phone, :ext, :shortcut, :photo, :role, :create_at, :update_at)";
		
		$this->pdo->query($sql);
		$this->pdo->bind(':id', $data['id']);
		$this->pdo->bind(':firstname', $data['firstname']);
		$this->pdo->bind(':lastname', $data['lastname']);
		$this->pdo->bind(':email', $data['email']);
		$this->pdo->bind(':position', $data['position']);
		$this->pdo->bind(':password', $data['password']);
		$this->pdo->bind(':phone', $data['phone']);
		$this->pdo->bind(':ext', $data['ext']);
		$this->pdo->bind(':shortcut', $data['shortcut']);
		$this->pdo->bind(':photo', $data['photo']);
		$this->pdo->bind(':role', $data['role']);
		$this->pdo->bind(':create_at', $data['create_at']);
		$this->pdo->bind(':update_at', $data['update_at']);

		if($this->pdo->execute()){
			return true;
		}else{
			return false;
		}
	}

    public function changePassword($id,$password){
		$sql = "UPDATE users SET password = :password WHERE id = :id";
        $this->pdo->query($sql);
        $this->pdo->bind(':id', $id);
        $this->pdo->bind(':password', $password);        
  
        if($this->pdo->execute()){
            return true;
        }else{
            return false;
        }
    }



















	
}
