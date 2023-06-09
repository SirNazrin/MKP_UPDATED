<?php

class Advisor extends Controller{

    public function index(){

        $data['title'] = 'Advisor';
        $this->view('/Template/header', $data);
        $this->view('AdvisorView/AdvisorProfileInterface', $data);
        $this->view('/Template/footer');

    }


   
    }
?>