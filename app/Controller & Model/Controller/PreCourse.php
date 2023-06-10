<?php

class PreCourse extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Kursus Pra-Perkahwinan';
            $this->view('/Template/header', $data);
            $this->view('UserView/UserPreCourseMainpageInterface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }



    }

    public function PreCourseApply(){


        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Daftar Kursus';
            $this->view('/Template/header', $data);
            $this->view('UserView/UserApplyPreCourseInterface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }



    }

    public function PreCourseView(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Kursus Pra-Perkahwinan';
            $this->view('/Template/header', $data);
            $this->view('UserView/UserViewPreCourseInterface', $data);
            $this->view('/Template/footer');
    
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

 
    }
}


?>