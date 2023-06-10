
<?php

class Consultation extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            // $data['user'] = $this->model('user_info')->getUserByIC();
            $this->view('/Template/header', $data);
            $this->view('UserView/UserConsultationMainpage', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ApplyConsult(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Permohonan Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('UserView/UserApplyConsultationInterface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ApplyConsultExtension(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('UserView/UserApplyConsultationExtensionInteface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ViewConsult(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('UserView/UserApplyConsultationExtensionInteface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }



    }

    public function EditConsult(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('UserView/UserApplyConsultationExtensionInteface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }


    }

    public function ConsultTimetable(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('UserView/UserApplyConsultationExtensionInteface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }


    }

    public function ConsultReview(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('UserView/UserApplyConsultationExtensionInteface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }
}


?>