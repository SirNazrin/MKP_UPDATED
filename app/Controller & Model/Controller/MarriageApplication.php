<?php

class MarriageApplication extends Controller{

    public function index(){

        $data['title'] = 'Marriage Application';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserApplyMarriageApplicationInterface', $data);
        $this->view('/Template/footer');

    }
}


?>