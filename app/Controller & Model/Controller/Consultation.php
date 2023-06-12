
<?php

class Consultation extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
            $data['userpartner'] = $this->model('UserPartner_Info')->getUserPartnerByIC();
            $data['consult'] = $this->model('Consultation_Registration')->getConsultInfoByUserIC();
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserConsultationMainpage', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ApplyConsult(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Permohonan Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserApplyConsultation', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ApplyConsultExtension(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserApplyConsultationExtension', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ViewConsult(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserViewConsultation', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function EditConsult(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserApplyConsultation', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }


    }

    public function ConsultTimetable(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserApplyConsultationExtension', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }


    }

    public function ConsultReview(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserViewConsultatioReview', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }
}


?>