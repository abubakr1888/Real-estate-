<?php
include './Database.php';

class UserModel{
    public $id;
    public $fullName;
    public $phoneNumber;
    public $login;
    public $password;
    public $userService;

    public function __construct($id = null, $fullName = null, $phoneNumber = null, $login = null, $password = null, $role = null, $userService = null, $userCard = null) {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->phoneNumber = $phoneNumber;
        $this->login = $login;
        $this->password = $password;
    }
}