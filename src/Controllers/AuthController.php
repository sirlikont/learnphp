<?php

namespace App\Controllers;

use App\Models\User;
use PDOException;

class AuthController {
    public function registerForm(){
        include 'views/auth/register.php';
    }

    public function register(){
        dump($_POST);
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $passwordConfirm = $_POST['password_confirm'] ?? null;
        
        if($email && $password && $password === $passwordConfirm){
            try {
                $user = new User();
                $user->email = $email;
                $user->password = password_hash(md5($user->email . $password . '5baa61e4c9b93f3'), PASSWORD_BCRYPT, ['cost' => 12]);
                $user->save();
                redirect('/login');
                return;
            } catch (PDOException $e) {
                redirect('/register');
            }
        } 
        redirect('/register');
    }

    public function loginForm(){
        include 'views/auth/login.php';
    }

    public function login(){
        dump($_POST);
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        if(!$email || !$password){
            redirect('/login');
            return;
        }
        
         $users = User::where('email', $email);
         $user = $users[0] ?? null;
         if($user && password_verify(md5($user->email . $password . '5baa61e4c9b93f3'), $user->password)){
            $_SESSION['userID'] = $user->id;
            redirect('/');
         } else {
            redirect('/login');
            
         } 
    }

    public function logout(){
        unset($_SESSION['userID']);
        redirect('/');
    }

}