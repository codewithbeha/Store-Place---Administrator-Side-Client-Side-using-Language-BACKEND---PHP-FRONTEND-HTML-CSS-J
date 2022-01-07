<?php
include_once "databaseConfig.php";

class UserMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $query= "select * from user where userid=:id";
        $statment = $this->conn->prepare($query);
        $statment->bindParam("id:, $userId");
        $statment->execute();
        return $result = $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function edit(\SimpleUser $user, $id)
    {
        $this->query = "update user set username=:username, fullname=:fullname where UserID=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $lastname = $user->getLastname();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":fullname", $fullname);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function getUserByUsername($username)
    {
        $query= "select * from user where username=:username";
        $statment = $this->conn->prepare($query);
        $statment->bindParam("username:, $username");
        $statment->execute();
        $result = $statment->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $query= "select * from user";
        $statment = $this->conn->prepare($query);
        $statment->execute();
        $result = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertUser(\simpleUser $user)
    {
        $query= "insert * from user (username, fullname, email, password, role) values (:username, :fullname, :email, :password, :role)";
        $statment = $this->conn->prepare($query);
        
        $username = $user->getUsername();
        $fullname = $user->getFullname();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role= $user->getRole();

        $passwordEncrypted = password_hash($pass, PASSWORD_BCRYPT);

        $statment->bindParam("username:", $username);
        $statment->bindParam("fullname:", $fullname);
        $statment->bindParam("email:", $email);
        $statment->bindParam("password:", $passwordEncrypted);
        $statment->bindParam("role:", $Role);

        $statment->execute();
    }

    public function deleteUser($userId)
    {
        $this->query = "delete from user where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }
}
