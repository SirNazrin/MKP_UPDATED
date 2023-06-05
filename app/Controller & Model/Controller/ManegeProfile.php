<?php

class ManageProfile extends Controller{

    public function index(){

        $data['title'] = 'Marriage Profile';
        $this->view('/Template/header', $data);
        //$this->view('UserView/UserRegistrationInterface', $data);
        $this->view('/Template/footer');

    }
}


?>