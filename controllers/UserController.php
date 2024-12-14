<?php
include '../services/UserService.php';

class UserController {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function register() {

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullName = $_POST['fullName'];
            $phoneNumber = $_POST['phoneNumber'];
            $login = $_POST['login'];
            $password = $_POST['password'];

            $this->userService->register_user($fullName, $phoneNumber, $login, $password);
        }
    }

    public function loging(): void {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $login = $_POST['login'];
            $phoneNumber = $_POST['phoneNumber'];
            $password = $_POST['password'];
            $this->userService->login_user($login, $password, $phoneNumber);
        }
    }
}

$controller = new UserController();

?>
