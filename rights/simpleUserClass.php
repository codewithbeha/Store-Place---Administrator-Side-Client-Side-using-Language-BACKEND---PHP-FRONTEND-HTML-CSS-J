<?php
include_once 'personClass.php';

class SimpleUser extends Person
{
    private $fullname;
    public function __construct($username,  $email, $password, $role, $fullname)
    {
        parent::__construct($username, $email, $password, $role);
        $this->fullname = $fullname;
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }

    public function getFullname()
    {
        return $this->fullname;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRole()
    {
        return $this->role;
    }
}
