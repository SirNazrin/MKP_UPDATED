<?php

class LogIn extends Controller{

    public function index(){

        $data['title'] = 'Log In';
        $this->view('/Template/headerModule1', $data);
        $this->view('UserView/UserLogInInterface', $data);
        $this->view('/Template/footer');

    }


    public function  ResetPassword(){

        $data['title'] = 'Reset Password';
        $this->view('/Template/headerModule1', $data);
        $this->view('UserView/ResetPassword', $data);
        $this->view('/Template/footer');
    
    }

}




?>