<?php

class Incentive extends Controller{

    public function index(){

        $data['title'] = 'Incentive';
        $this->view('/Template/header', $data);
        //$this->view('UserView/UserRegistrationInterface', $data);
        $this->view('/Template/footer');

    }
}


?>