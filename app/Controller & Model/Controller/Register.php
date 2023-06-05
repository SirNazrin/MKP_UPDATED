<?php

class Register extends Controller{

    public function index(){

        $data['title'] = 'Register';
        $this->view('/Template/headerModule1', $data);
        $this->view('UserView/UserRegistrationInterface', $data);
        $this->view('/Template/footer');

    }
}
