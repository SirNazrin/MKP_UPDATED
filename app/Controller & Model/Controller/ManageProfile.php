<?php

class ManageProfile extends Controller{

    public function index(){

        $data['title'] = ' User Profile';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserProfileInterface', $data);
        $this->view('/Template/footer');

    }
}


?>