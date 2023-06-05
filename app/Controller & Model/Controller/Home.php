<?php

class Home extends Controller{

    public function index(){
        $data['title'] = 'Homepage';
        $this->view('/Template/headerModule1', $data);
        $this->view('/Home/index', $data);
        $this->view('/Template/footer');
    }

}
?>