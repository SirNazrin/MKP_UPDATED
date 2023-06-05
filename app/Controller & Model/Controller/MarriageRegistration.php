<?php

class MarriageRegistration extends Controller{

    public function index(){

        $data['title'] = 'Marriage Register';
        $this->view('/Template/header', $data);
        //$this->view('UserView/User', $data);
        $this->view('/Template/footer');

    }
}


?>