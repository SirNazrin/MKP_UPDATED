<?php

class MarriageRegistration extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Marriage Register';
            $this->view('/Template/header', $data);
            //$this->view('UserView/User', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }




    }
}


?>