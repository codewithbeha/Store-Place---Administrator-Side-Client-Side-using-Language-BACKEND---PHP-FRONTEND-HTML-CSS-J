<?php
include_once 'adminClass.php';
include_once 'userMapper.php';
include_once 'simpleUserClass.php';
session_start();

if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else {
    header("Location:../views/login.php");
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:../views/login.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password) != null) {
            header('Location:../views/home.php');
        } else
            header("Location:../views/login.php");
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user=$mapper->getUserByUsername($username);
        if($user==null) return false;

        if(password_verify($password, $user['password'])){
            return true;
        } 
        return false;
    }
}


class RegisterLogic
{
    private $username = "";
    private $fullname = "";
    private $email = "";
    private $password = "";
    private $lastname = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->fullname = $formData['fullname'];
        $this->email = $formData['email'];
        $this->password = $formData['password'];
        $this->lastname = $formData['lastname'];
    }

    public function registerUser()
    {   //ketu thirret user mapper
        $user=new SimpleUser($this->username, $this->password, 20, 0, $this->lastname);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../views/register.php");
    }
}