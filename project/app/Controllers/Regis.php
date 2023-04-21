<?php

namespace App\Controllers;
use App\Models\RegisteredUser;
class Regis extends BaseController
{
    public function login()
    {
        return view('Pages/Login_page');
    }

    public function register(){
        return view('Pages/registration_page');
       
    }

    public function registerUser(){
        $email = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'),PASSWORD_DEFAULT);
        $firstName = $this->request->getPost('firstName');
        $lastName = $this->request->getPost('lastName');
        $data =[
            'firstName'=>$firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => $password,
            'role' => "student",
        ];
        $model = new RegisteredUser();
        $model->register($data);

        echo "berhasil";
    }
    public function checklogin(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $model = new RegisteredUser();
        $result=$model->login($email)->getResult();
        foreach($result as $data){
            if(password_verify($password,$data->password))
            {
                echo "berhasil";
            }
        }
        
    }
}