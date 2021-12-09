<?php

namespace App\Controller;

use App\Model\UserModel;


class UserController extends BaseController
{
    public function executeUser(){
        $modelUser = new UserModel();
        $users = $modelUser->getAllUsers();
        return $this->render('User List', $users, 'Frontend/user');
    }

    public function executeLogin(){
        $modelUser = new UserModel();
        $data = [
            'email' => '',
            'password' => '',
            'passwordError' => '',
            'emailError' => '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'passwordError' => '',
                'emailError' => '',
            ];

            //Email validation
            if (empty($data['email'])) {
                $data['emailError'] = 'Your email cannot be empty !';
            }elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter a valid email !';
            }
            //Password validation
            if(empty($data['password'])) {
                $data['passwordError'] = 'Your password cannot be empty !';
            }

            if(!empty($data['email']) && !empty($data['password'])){
                $loggedUser = $modelUser->login($data['email'], $data['password']);
                if($loggedUser){
                    $this->createSessionUser($loggedUser);
                    header('Location: /user');
                }else{
                    $data['passwordError'] = 'Wrong password, try again !';
                }
            }else{
                return $this->render('Wrong Login', $data , 'Frontend/login');

            }
        }
        return $this->render('Login', $data , 'Frontend/login');
    }

    public function executeRegister(){
        $modelUser = new UserModel();
        $data = [
    		'firstname' => '',
    		'lastname' => '',
            'password' => '',
            'email' => '',
            'is_admin' => '',
            'fistnameError' => '',
    		'lastnameError' => '',
            'passwordError' => '',
            'emailError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
        		'firstname' => trim($_POST['firstname']),
        		'lastname' => trim($_POST['lastname']),
                'password' => trim($_POST['password']),
                'email' => trim($_POST['email']),
                'is_admin' => trim($_POST['is_admin']),
                'fistnameError' => '',
        		'lastnameError' => '',
                'passwordError' => '',
                'emailError' => ''
            ];

            $textValidation = "/^[a-zA-Z0-9]*$/";

            //Firstname validation
            if(empty($data['firstname'])){
                $data['fistnameError'] = 'Your name cannot be empty !';
            }elseif (!preg_match($textValidation, $data['firstname'])) {
                $data['fistnameError'] = 'Please enter a valid name !';
            }

            //Lastname validation
            if (empty($data['lastname'])) {
                $data['lastnameError'] = 'Your name cannot be empty !';
            }elseif(!preg_match($textValidation, $data['lastname'])) {
                $data['lastnameError'] = 'Please enter a valid name !';
            }

            //Email validation
            if (empty($data['email'])) {
                $data['emailError'] = 'Your email cannot be empty !';
            }elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter a valid email !';
            }else{
                if($modelUser->getUserByEmail($data['email'])){
                    $data['emailError'] = 'Email already taken !';
                }
            }

            //Password validation
            if(empty($data['password'])) {
                $data['passwordError'] = 'Your password cannot be empty !';
            }elseif (strlen($data['password']) < 7) {
                $data['passwordError'] = 'Your password must have at least 8 character!';
            }
            if(!empty($data['firstname']) && !empty($data['lastname']) && !empty($data['email']) && !empty($data['password'])){
                if($modelUser->register($data)){
                    var_dump($data);
                    header('Location: /');
                }else{
                    die('Oups ... Something went wrong please try again !');
                };
            }else{
                return $this->render('Wrong Register', $data , 'Frontend/register');

            }
        }
        return $this->render('Register', $data , 'Frontend/register');
    }

    public function createSessionUser($user){
        session_start();
        $_SESSION['user_id'] = $user->id;
        $_SESSION['firstname'] = $user->firstname;
        $_SESSION['lastname'] = $user->lastname;
        $_SESSION['email'] = $user->email;
    }
}



?>
