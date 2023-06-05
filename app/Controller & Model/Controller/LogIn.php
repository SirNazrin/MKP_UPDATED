<?php

class LogIn extends Controller{

    public function index(){

        $data['title'] = 'Log In';
        $this->view('/Template/headerModule1', $data);
        //$this->view('UserView/UserRegistrationInterface', $data);
        $this->view('/Template/footer');

    }
}


?>