<?php 
include '../models/Database.php';

class UserService{

    private $database;

    public function __construct(){
        $this->database = new Database();
    }
    public function get_user_by_id($phoneNumber) : void {

        $svar = $this->database->getConnection()->prepare('select * from users where number = :phoneNumber');
        $svar->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
        $svar->execute();
        $result = $svar->fetchAll(PDO::FETCH_ASSOC);
    }


    public function register_user($fullName, $phoneNumber, $login, $password) {

        $passwordSalt = $password . hash('sha256', $password);
        $hashedPassword = hash('sha256', $passwordSalt);

        $stmt = $this->database->getConnection()->prepare('INSERT INTO users (fullName, phoneNumber, login, password) VALUES (:fullName, :phoneNumber, :login, :password)');
        $stmt->bindParam(':fullName', $fullName);
        $stmt->bindParam(':phoneNumber', $phoneNumber);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
    }

    public function login_user($login, $password, $number) {

        $stmt = $this->database->getConnection()->prepare('SELECT * FROM users WHERE login = :login and phonenumber = :number');
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':phonenumber', $number);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $hashPassword = $user['password'];

        $passwordSalt = $password . hash('sha256', $password);
        $hashedPassword = hash('sha256', $passwordSalt);
        

        if ($user) {
            if ($hashedPassword == $hashPassword) {
                return "Login successful!";
            } else {
                return "Invalid password!";
            }
        } else {
            return "User not found!";
        }
    }
}

?>