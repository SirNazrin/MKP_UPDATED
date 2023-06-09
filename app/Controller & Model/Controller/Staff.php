<?php

class Staff extends Controller{

    public function index(){

        $data['title'] = 'Staff';
        $this->view('/Template/header', $data);
        $this->view('StaffView/StaffProfileInterface', $data);
        $this->view('/Template/footer');

    }


   
    }
?>