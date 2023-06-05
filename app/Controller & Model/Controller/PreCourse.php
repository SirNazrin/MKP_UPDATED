<?php

class PreCourse extends Controller{

    public function index(){

        $data['title'] = 'Pre-Course Registration';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserPreCourseMainpageInterface', $data);
        $this->view('/Template/footer');

    }
}


?>