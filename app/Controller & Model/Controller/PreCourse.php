<?php

class PreCourse extends Controller{

    public function index(){

        $data['title'] = 'Kursus Pra-Perkahwinan';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserPreCourseMainpageInterface', $data);
        $this->view('/Template/footer');

    }

    public function PreCourseApply(){

        $data['title'] = 'Daftar Kursus';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserApplyPreCourseInterface', $data);
        $this->view('/Template/footer');

    }

    public function PreCourseView(){

        $data['title'] = 'Kursus Pra-Perkahwinan';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserViewPreCourseInterface', $data);
        $this->view('/Template/footer');

    }
}


?>