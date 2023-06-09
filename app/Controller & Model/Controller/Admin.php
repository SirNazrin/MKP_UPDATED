<?php

class Admin extends Controller{

    public function index(){

        $data['title'] = 'Admin';
        $this->view('/Template/header', $data);
        $this->view('AdminView/AdminManageProfile', $data);
        $this->view('/Template/footer');

    }


    public function  EditProfile(){

        $data['title'] = 'Admin';
        $this->view('/Template/header', $data);
        $this->view('AdminView/AdminEditProfile', $data);
        $this->view('/Template/footer');
    
    }

}
?>