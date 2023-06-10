<?php

class MarriageApplication extends Controller{

    public function index(){

        $data['title'] = 'Marriage Application';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserApplyMarriageApplicationInterface1', $data);
        $this->view('/Template/footer');

    }

    public function page2(){

        $data['title'] = 'Marriage Application';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserApplyMarriageApplicationInterface2', $data);
        $this->view('/Template/footer');

    }

    public function page3(){

        $data['title'] = 'Marriage Application';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserApplyMarriageApplicationInterface3', $data);
        $this->view('/Template/footer');

    }

    public function page4(){

        $data['title'] = 'Marriage Application';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserApplyMarriageApplicationInterface4', $data);
        $this->view('/Template/footer');

    }


}


?>