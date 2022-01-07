<?php
//merri prej databaze te dhenat...
abstract class Person
{   
    protected $username;
    protected $fullname;
    protected $email;
    protected $password;
    protected $role;

    function __construct($username, $fullname, $email, $password, $role)
    {
        $this->username = $username;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();

    protected function getUsername()
    {
        return $this->username;
    }
}